<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Carbon\Carbon;
use Session;

/*
------------------------------------------------
    Котроллер категорій
    - створення
    - видалення
    - зміна
------------------------------------------------
*/

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
        // Перевірка
        $this->validate($request, [
            'category' => 'required'
        ], [
            'required' => 'Поле категорії є обовязковим'
        ]);


        // Збереження
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

    // Форма редагування
    public function edit($id)
    {
        return view('edit-category', ['category' => Category::find($id)] );
    }

    // Редагування категорії
    public function change($id, Request $request)
    {
        // вибираємо категорію
        $cat = Category::find($id);
        $cat->name = $request->input('category');
        $cat->created_at = new Carbon();
        $cat->save();
        Session::flash('status', 'ok');
        return redirect()->action('CategoryController@index');
    }
}
