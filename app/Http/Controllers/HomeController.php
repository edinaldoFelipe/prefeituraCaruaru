<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        switch (Auth::user()->level) {
            case 0:
                return view('dashboard');
            break;
            case 1:
                return view('collaborator');
            break;
            case 2:
                return view('manager');
            break;
            default:
                \Session::flush();
                return redirect(route('login'));
            break;
        }
    }
}
