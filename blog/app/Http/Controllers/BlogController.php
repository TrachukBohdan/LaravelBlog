<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Session;

class BlogController extends Controller
{

    public function index()
    {

    }

    // Список вісіх постів
    public function categoryPosts($id)
    {
        $cat = Category::find($id);

        $data = [];
        $data['cat_id'] = $cat->id;
        $data['cat_name'] = $cat->name;
        $data['posts'] = Post::where('cat_id', $cat->id)->get();
        return view('category-posts',$data);
    }

    // Створити пост
    public function createPost($id)
    {
        return view('create-post', ['id' => $id]);
    }

    // Зберегти пост
    public function storePost(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->created_at = new Carbon();
        $post->cat_id = $request->input('id');
        $post->save();
        Session::flash("status", "ok");
        return redirect()->action('BlogController@categoryPosts', ['cat_id' => $post->cat_id]);
    }

    //Видалити пост
    public function deletePost($id)
    {
        Session::flash("status", "ok");
        $post = Post::find($id);
        $cat_id = $post->cat_id;
        $post->delete();
        Session::flash("status", "ok");
        return redirect()->action('BlogController@categoryPosts', ['cat_id' => $cat_id]);
    }

    // Редагувати пост
    public function editPost($id)
    {
        $data = [];
        $data['post'] = Post::find($id);
        return view('edit-post', $data);
    }

    public function changePost( Request $request )
    {
        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->save();
        Session::flash("status", "ok");
        return redirect()->action('BlogController@categoryPosts', ['cat_id' => $post->cat_id]);
    }

    public function singlePost($id)
    {
        $post = Post::find($id);
        return view('single-post', ['post' => $post ]);
    }
}
