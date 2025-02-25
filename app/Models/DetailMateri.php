<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailMateri extends Model
{
    use HasFactory;

    protected $table = 'detail_materi'; // Nama tabel
    protected $fillable = [
        'materi_id', // Foreign key ke tabel materis
        'judul', // Judul detail materi
        'deskripsi', // Deskripsi detail materi
        'video_url', // URL video (opsional)
    ];

    // Relasi ke tabel materis
    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id');
    }
}
