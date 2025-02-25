<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::all(); // Mengambil semua data dari tabel Materi
        return view('materi', compact('materis')); // Mengirim data ke view 
    }
    public function show($id)
    {
        $materi = Materi::with('detailMateri')->findOrFail($id);
        return view('detail-materi', compact('materi'));
    }
}
