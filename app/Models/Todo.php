<?php

namespace App\Models;

use Database\Factories\TodoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return TodoFactory::new();
    }


    protected $attributes = [
        'compleated' => false,
        'avaliale' => true,


    ];
}
