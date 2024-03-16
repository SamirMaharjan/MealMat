<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }
    public function index()
    {
        if (Auth::check()) {
            $user = $this->user;
            // dd($user);
            if ($user->is_super_admin) {
                $client = User::where('is_user', 1)->orderBy('created_at', 'desc')->get();
                // dd($client);
                return view('client.index', compact('client'));
            } else {
                Auth::logout();

                return redirect()->back()->with('error', 'Unathorized access');
            }
        } else {

            return view('auth.login');
        }
    }

    public function create()
    {
        return view('client.create');
    }
    public function store(Request $request)
    {
        $user = $this->user;
        $request->validate([
            // 'org_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',

        ]);
        $new_user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->contact,
            'password' => Hash::make($request->password),
            'is_user' => 1,
            'is_dietician' => 0,
        ]);


        return redirect()->route('index')->with('success', 'Sub User Created SuccessFully');
    }
    public function edit($id)
    {
        // $id= base64_decode($id);
        $user = User::findOrFail($id);
        return view('client.edit', compact('user'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $id = base64_decode($request->id);
        $user = User::findOrFail($id);
        if ($user->is_doctor) {
            // dd('okay');
            return redirect()->route('index')->with('warning', 'Something went wrong');
        } else {

            $request->validate([
                // 'org_name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',

            ]);
            if (isset($request->password)) {
                $request->validate([
                    'password' => 'confirmed',
                ]);
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
            }

            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->contact,
                'is_doctor' => 1,

            ]);
            // $user->assignRole('HIMSubUser');
            return redirect()->route('index')->with('success', 'Sub User Updated SuccessFully');
        }
    }
}
