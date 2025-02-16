<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Materi;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan daftar artikel (kegiatan)
    public function index()
    {
        $articles = Article::all(); // Ambil semua artikel
        $materis = Materi::all(); // Ambil semua materi

        return view('kegiatan', compact('articles', 'materis'));
    }

    // Menampilkan detail artikel berdasarkan ID
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('detail-kegiatan', compact('article'));
    }
}