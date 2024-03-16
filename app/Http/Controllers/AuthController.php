<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function post_login(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_super_admin) {
                $user1 = User::find($user->id);
                $user1->timestamps = false;
                $user1->last_used_at = Carbon::now();
                $user1->save();
                return redirect()->intended('/')
                    ->withSuccess('Signed in');
            } else {
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();
                return redirect()->back()->with('error', 'Unathorized access');
            }
            // dd($user,$roles);


        }

        return redirect("login")->with('warning', 'Login details are not valid');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
