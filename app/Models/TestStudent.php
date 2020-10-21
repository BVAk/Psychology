<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestStudent extends Model
{
    use HasFactory;
    protected $table = "teststudent";

    protected $fillable = [
        'users_id', 'categories_id'
    ];
}
