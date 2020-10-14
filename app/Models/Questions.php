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
        'question', 'type', 'category_id'
    ];
    public function test()
    {
        return $this->hasMany('App\Models\Answers');
    }
}
