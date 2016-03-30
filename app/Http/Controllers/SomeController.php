<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Log;

class SomeController extends Controller
{

	public function index()
	{
        if(true)
        {
            Log::info("The user is login");
        }
        else
        {
            Log::info("The user is logOUT");
        }

	}

	public function contacts()
	{
		return view("pages.contacts");
	}

}
