<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekomendasi extends Model
{
    use HasFactory;
    protected $table = 'rekomendasis';
    protected $fillable = ['title', 'content', 'category', 'image'];
    public function relatedArticles()
{
    return self::where('category', $this->category)
                ->where('id', '!=', $this->id)
                ->latest()
                ->take(4) // Ambil 4 artikel terbaru
                ->get();
}
}   
