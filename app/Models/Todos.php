<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    use HasFactory;

    protected $table = 'todos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'todo',
        'completed'
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'todo' => 'string',
        'completed' => 'integer'
    ];

    public $timstamp = true;
}
