<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = "peserta";

    protected $fillable = [
        'nama',
        'tgl_lahir',
        'email',
        'no_hp',
        'alamat',
        'kursus_id',
    ];


    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'kursus_id', 'id');
    }
}
