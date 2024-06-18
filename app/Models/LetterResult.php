<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'disposition_id',
        'name',
        'status'
    ];
}
