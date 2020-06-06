<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Category;
use App\Tags;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
  public function index(Posts $posts)
  {
    $category_widget = Category::all();
    $posts_widget = Posts::latest()->paginate(4);
    $tag = Tags::all();
    $data = $posts->OrderBy('created_at', 'desc')->get();
    return view('user.home', compact('data', 'category_widget', 'posts_widget', 'tag'));
  }

  public function isi($slug)
  {
    $category_widget = Category::all();
    $posts_widget = Posts::latest()->paginate(4);
    $tag = Tags::all();
    $data = Posts::where('slug', $slug)->first();
    return view('user.isi_post', compact('data', 'category_widget', 'posts_widget', 'tag'));
  }

  public function list_blog()
  {
    $category_widget = Category::all();
    $posts_widget = Posts::latest()->paginate(4);
    $tag = Tags::all();
    $data = Posts::latest()->paginate(6);
    return view('user.list_blog', compact('data', 'category_widget', 'posts_widget', 'tag'));
  }

  public function list_category(category $category)
  {
    $category_widget = Category::all();
    $posts_widget = Posts::latest()->paginate(4);
    $tag = Tags::all();
    $data = $category->posts()->paginate();
    return view('user.list_blog', compact('data', 'category_widget', 'posts_widget', 'tag'));
  }

  public function cari(Request $request)
  {
    $category_widget = Category::all();
    $posts_widget = Posts::latest()->paginate(4);
    $tag = Tags::all();
    $data = Posts::where('judul', 'like', '%' . $request->cari . '%')->paginate();
    return view('user.list_blog', compact('data', 'category_widget', 'posts_widget', 'tag'));
  }

  public function users($users)
  {
    $users = Crypt::decrypt($users);
    $category_widget = Category::all();
    $posts_widget = Posts::latest()->paginate(4);
    $tag = Tags::all();
    $user = User::findorfail($users);
    $data = Posts::where('users_id', $users)->latest()->get();
    return view('user.author', compact('data', 'user', 'category_widget', 'posts_widget', 'tag'));
  }
}
