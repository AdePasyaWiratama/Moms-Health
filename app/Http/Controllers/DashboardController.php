<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class DashboardController extends Controller
{
    //
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function gallery() {
        return view('gallery');
    }

    public function contact() {
        return view('contact');
    }

    public function article() {
        // $articles = Article::orderBy('judul', 'asc');

        $articles = Article::all();
        return view('article')->with('articles', $articles);
    }
}
