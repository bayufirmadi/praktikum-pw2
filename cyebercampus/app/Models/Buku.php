<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Penulis;


class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }
}
