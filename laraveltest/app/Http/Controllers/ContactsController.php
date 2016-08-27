<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
	public function contacts() {
		$first = 'Wally';
		$last = 'West';
		$email = 'reallyfast@speedforce.com';
		
		$site_title = 'Stuff and Things';
		
		return view('navbar');
		return view('contacts', compact('first', 'last', 'email', 'site_title'));
		
	}
	
}
;


