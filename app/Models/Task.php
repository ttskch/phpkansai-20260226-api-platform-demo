<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
        'done' => 'boolean',
    ];

    protected $attributes = [
        'done' => false,
    ];
}
