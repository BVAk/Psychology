<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $table = "questions";
    public $timestamps = false;

    protected $fillable = [
        'question', 'type', 'categories_id'
    ];
    public function answer()
    {
        return $this->hasMany('App\Models\Answers');
    }
}
