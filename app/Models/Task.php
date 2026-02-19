<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Task extends Model
{
    protected $casts = [
        'done' => 'boolean',
    ];

    protected $attributes = [
        'done' => false,
    ];
}
