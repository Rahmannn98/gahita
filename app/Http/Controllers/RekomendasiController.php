<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;


class RekomendasiController extends Controller
{
    public function index()
    {
        $rekomendasi = Rekomendasi::latest()->paginate(10);
        return view('rekomendasi', compact('rekomendasi'));
    }

    // Menampilkan detail rekomendasi dengan artikel terkait
    public function show($id)
    {
        $article = Rekomendasi::findOrFail($id);
        $relatedArticles = $article->relatedArticles();

        return view('rekomendasi', compact('article', 'relatedArticles'));
    }
}
