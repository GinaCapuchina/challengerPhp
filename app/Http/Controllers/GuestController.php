<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $apps = App::with('User')
            ->orderByDesc('created_at')
            ->paginate(10);
        return view('welcome', compact('apps'));
    }
}
