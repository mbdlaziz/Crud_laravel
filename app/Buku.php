<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['judul','penerbit', 'tahu_terbit', 'pengarang'];
}
