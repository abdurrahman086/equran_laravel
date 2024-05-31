<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadits extends Model
{
    use HasFactory;

    protected $fillable = [
     'nomor_hadits',
     'judul',
     'isi_hadits', 
     'terjemahan'
    ];

}
