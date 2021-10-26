<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('ketua')) {
            return view('ketuadash');
        } elseif (Auth::user()->hasRole('bendahara')) {
            return view('bendaharadash');
        } elseif (Auth::user()->hasRole('koordinator')) {
            return view('koordinatordash');
        } elseif (Auth::user()->hasRole('donatur')) {
            return view('donaturdash');
        }
    }
}
