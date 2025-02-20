<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Materi;
use App\Models\Rekomendasi; 
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan daftar artikel (kegiatan)
    public function index()
    {
        $articles = Article::all();
        $materis = Materi::all();

        return view('kegiatan', compact('articles', 'materis'));
    }

    // Menampilkan detail artikel berdasarkan ID
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $articles = Article::all();
        $materis = Materi::all();
    
        // Ambil artikel terkait dari tabel rekomendasis berdasarkan kategori yang sama
        $rekomendasis = Rekomendasi::where('category', $article->category)
                            ->where('id', '!=', $id) // Hindari menampilkan artikel yang sedang dibuka
                            ->latest()
                            ->take(3)
                            ->get();
    
        return view('detail-kegiatan', compact('article', 'articles', 'materis', 'rekomendasis'));
    }
}
