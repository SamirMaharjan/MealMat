<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userRegister(Request $request)
    {
        // log::info($request->all());
        
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $rules = [
                "first_name" => "required",
                "last_name" => "required",
                "phone" => "required|min:10|max:10",
                "email" => "required|unique:users",
                "password" => "required"
            ];

            $customMessage = [
                'email.required' => 'Email is required',
                'email.email' => 'Valid Email is required',
                'email.unique' => 'Email is already exists',
                'password.required' => 'Password is required',
                'name.required' => 'name is required',
                'phone.required' => 'Phone is required',
            ];

            $validator = Validator::make($data, $rules, $customMessage);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            } else {
                $user = new User;
                $user->first_name = $data['first_name'];
                $user->last_name = $data['last_name'];
                $user->phone = $data['phone'];
                $user->email = $data['email'];
                $user->password = Hash::make($data['password']);
                $user->save();

                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                    $user = User::where('email', $data['email'])->first();
                    //generate access token with passport
                    $authorizationToken = $user->createToken($data['email'])->plainTextToken;
                    // $authorizationToken = $user->createToken($data['email'])->accessToken;
                    //update access token in user table
                    User::where('email', $data['email'])->update(['access_token' => $authorizationToken]);
                }

                $message = "User register Successfully!";
                return response()->json(["status" => true, "userID" => $user, "message" => $message, 'token' => $authorizationToken], 201);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userLogin(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                $user = User::where('email', $data['email'])->first();
                //generate access token with passport
                $authorizationToken = $user->createToken($data['email'])->plainTextToken;

                // dd($authorizationToken);
                //update access token in user table
                User::where('email', $data['email'])->update(['access_token' => $authorizationToken]);
                $message = "User login Successfully!";
                return response()->json(["status" => true, "message" => $message, 'token' => $authorizationToken, "userID" => $user], 201);
            } else {
                $message = "Email or Password incorrect!";
                return response()->json(["status" => false, "message" => $message], 201);
            }
        }
    }

    public function userLogout(Request $request)
    {
        $access_token = $request->header('Authorization');
        if (empty($access_token)) {
            $message = "User token is missing in Api header!";
            return response()->json(["status" => false, "message" => $message], 422);
        } else {
            $access_token = str_replace("Bearer ", "", $access_token);
            $userCount = User::where('access_token', $access_token)->count();

            if ($userCount > 0) {
                User::where('access_token', $access_token)->update(['access_token' => NULL]);
                $message = "User Logged Out Successfully !";
                return response()->json(["status" => true, "message" => $message], 200);
            }
        }
    }


    public function updateProfile(Request $request)
    {
        $access_token = $request->header('Authorization');
        $input = $request->all();
        // dd(auth('sanctum')->user()->access_token);
        if (empty($access_token)) {
            $message = "User not found!";
            return response()->json(["status" => false, "message" => $message], 422);
        } else {
            $access_token = str_replace("Bearer ", "", $access_token);

            $data = User::findOrFail(auth('sanctum')->user()->id);

            $data->update($input);

            $message = "User profile updated successfully";
            return response()->json(["status" => true, "message" => $message], 200);
        }
    }

    // public function userDashboard(Request $request)
    // {
    //     $header = $request->header('Authorization');
    //     if (empty($header)) {
    //         $message = "Header Authorization Toke is mission in Api Header";
    //         return response()->json(['status' => false, 'message' => $message], 422);
    //     } else {
    //         if ($header = str_replace("Bearer ", "", $header)) {
    //             $authUserData = User::where('access_token', $header)->first();

    //             $userDetails = User::find($authUserData->id);
    //             $TotaluserOrder = Order::where('user_id', $userDetails->id)->count();
    //             $pendingOrder = Order::where('user_id', $userDetails->id)->where('order_status', 'pending')->count();
    //             $processOrder = Order::where('user_id', $userDetails->id)->where('order_status', 'In Progress')->count();
    //             $deliveredOrder = Order::where('user_id', $userDetails->id)->where('order_status', 'Delivered')->count();
    //             $CanceledOrder = Order::where('user_id', $userDetails->id)->where('order_status', 'Canceled')->count();
    //             $message = "Your Dashboard Details!";
    //             return response()->json(["status" => true, "userDetails" => $userDetails, "TotaluserOrder" => $TotaluserOrder, "pendingOrder" => $pendingOrder, "processOrder" => $processOrder, "deliveredOrder" => $deliveredOrder, "CanceledOrder" => $CanceledOrder, "message" => $message], 201);
    //         } else {
    //             $message = "Header Authorization is incorrect !";
    //             return response()->json(["status" => false, "message" => $message], 422);
    //         }
    //     }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function dashboard(Request $request, $id)
    // {
    //     //
    // }

    public function dashboard(Request $request)
    {
        $access_token = $request->header('Authorization');
        if (empty($access_token)) {
            $message = "User token is missing in Api header!";
            return response()->json(["status" => false, "message" => $message], 422);
        } else {
            $access_token = str_replace("Bearer ", "", $access_token);
            $userCount = User::where('access_token', $access_token)->count();

            if ($userCount > 0) {
                $user = User::where('access_token', $access_token)->first();
               $doctor_list = User::where('is_dietician',1)->select('first_name','last_name','email','phone')->get();
               $my_doctor = User::where('id', $user->doctor_id)->first();
                return response()->json(['status' => true, 'doctor_list' => $doctor_list,'my_doctor'=>$my_doctor], 200);
            } else {
                $message = "Please Login first!";
                return response()->json(["status" => true, "message" => $message], 201);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
