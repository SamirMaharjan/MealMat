<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
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
                $products = Product::orderBy('created_at', 'desc')->get();
                // dd($client);
                return view('products.index', compact('products'));
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
        return view('products.create');
    }
    public function store(Request $request)
    {
        $user = $this->user;
        $request->validate([
            // 'org_name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'price' => 'required',
            'goal' => 'required',
            'description' => 'required',
            // 'password' => 'required|confirmed',

        ]);
        $new_user = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'goal' => $request->goal,
            'description' => $request->description,
           
        ]);


        return redirect()->route('index-product')->with('success', 'Product Created SuccessFully');
    }
    public function edit($id)
    {
        // $id= base64_decode($id);
        $user = Product::findOrFail($id);
        return view('products.edit', compact('user'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $id = base64_decode($request->id);
        $product = Product::findOrFail($id);
   
        $request->validate([
            // 'org_name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'price' => 'required',
            'goal' => 'required',
            'description' => 'required',
            // 'password' => 'required|confirmed',

        ]);
          

            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'goal' => $request->goal,
                'description' => $request->description,
            ]);
            // $user->assignRole('HIMSubUser');
            return redirect()->route('index-product')->with('success', 'Product Updated SuccessFully');
        
    }
}