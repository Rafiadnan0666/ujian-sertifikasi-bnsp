<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $table = "kursus";

    protected $fillable = [
        'nama_matkul', 
        'deskripsi',
        'harga',
    ];

    public function kursus()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
