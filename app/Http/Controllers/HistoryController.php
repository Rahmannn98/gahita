<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('pages.history', ['title' => 'Riwayat Pembelian']);
    }
}