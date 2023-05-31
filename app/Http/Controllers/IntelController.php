<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntelController extends Controller
{
    public function test()
    {
        return view('dashboard');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        return view('pages.intel.intel_dashboard');
    }
    public function intel_analytics_dashboard()
    {
        return view('pages.intel.intel_analytics_dashboard');
    }
    public function intel_marketing_dashboard()
    {
        return view('pages.intel.intel_marketing_dashboard');
    }
    public function intel_introduction()
    {
        return view('pages.intel.intel_introduction');
    }
    public function intel_privacy()
    {
        return view('pages.intel.intel_privacy');
    }
    public function intel_build_notes()
    {
        return view('pages.intel.intel_build_notes');
    }
}
