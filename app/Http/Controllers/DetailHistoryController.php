<?php

namespace App\Http\Controllers;

use App\Models\History;

class DetailHistoryController extends Controller
{
    public function show($id)
    {
        $historyItem = History::findOrFail($id);

        return view('pages.detail-history', [
            'title' => 'Detail Riwayat Pembelian',
            'history' => $historyItem,
        ]);
    }
}
