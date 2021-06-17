<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class penulisan extends Model
{
    use HasFactory;

    protected $table = 'penulisan';

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
