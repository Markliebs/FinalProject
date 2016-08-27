<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function about() {
        $first = 'Wally';
        $last = 'West';
        $email = 'reallyfast@speedforce.com';

        return view('about', compact('first', 'last', 'email'));
    }
}
