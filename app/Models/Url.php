<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    /** @use HasFactory<\Database\Factories\UrlFactory> */
    use HasFactory;

    protected $fillable = [
        'url',
        'shortened_url',
        'user_id',
        'clicks',
    ];

    protected $casts = [
        'clicks' => 'integer',
    ];
}
