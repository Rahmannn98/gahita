<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Ambil semua artikel dari database
        return view('kegiatan', compact('articles'));

    }
}
