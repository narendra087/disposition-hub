<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispositionContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'disposition_id',
        'application_id',
        'user_id',
        'forward_id',
        'content',
        'status'
    ];
}
