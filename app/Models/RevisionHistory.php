<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter_id',
        'user_id',
        'revision'
    ];
}
