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
        //dd(Category::all());
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

    // Видалити
    public function delete($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        Session::flash('status', 'ok');
        return redirect()->action('CategoryController@index');
    }

    // Редагувати
    public function edit($id)
    {
        return view('edit-category', ['category' => Category::find($id)] );
    }

    public function change($id, Request $request)
    {
        $cat = Category::find($id);
        $cat->name = $request->input('category');
        $cat->created_at = new Carbon();
        $cat->save();
        Session::flash('status', 'ok');
        return redirect()->action('CategoryController@index');
    }
}
