<?php

namespace App\Http\Controllers;

use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::all();

        return view('pages.history', [
            'title' => 'Riwayat Pembelian',
            'histories' => $histories,
        ]);
    }
}
