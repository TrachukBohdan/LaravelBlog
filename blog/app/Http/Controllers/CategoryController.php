<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Carbon\Carbon;
use Session;

class CategoryController extends Controller
{
    // виведення категорій
    public function index(Request $request)
    {
        return view('categories', ['categories' => Category::all()]);
    }

    // Форма створення категорії
    public function create($id = 0)
    {
        return view('create-category');
    }

    // Збереження категорії
    public function store(Request $request)
    {
        //dd(new Carbon);
        $cat = new Category();
        $cat->name = $request->input('category');
        $cat->created_at = new Carbon();
        $cat->save();

        Session::flash('status', 'ok');
        return redirect()->action('CategoryController@index');
    }
}
