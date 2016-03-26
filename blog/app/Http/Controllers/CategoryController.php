<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories');
    }

    public function create($id = 0)
    {
        return view('create-category');
    }
}
