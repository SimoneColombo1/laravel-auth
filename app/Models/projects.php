<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "descrizione",
        "data_inizio",
        "data_fine",
        "completato",


    ];
}
