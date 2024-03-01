<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if ($user->hasRole('SuperAdmin')) {
            $job_list = Job::where('status', 1)->with('questions', 'client')->orderBy('created_at', 'desc')->get();
        } else{
            Auth::logout();

            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
            return redirect()->back()->with('error','Unathorized access');
        }
    


        $job_list->each(function ($job) {
            // Retrieve the stages associated with questions for this job
            $stages = $job->questions->pluck('pivot.stage_id')->unique()->values()->toArray();

            // Add the $stages array as a new column 'stages' in the job
            $job->stages = $stages;
        });
        return view('pages.index', compact('client', 'job_list'));
    }else{
        dd('okay');
        return view('frontend.layouts.master');
    }
    }
}
