<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";
    public $timestamps = false;

    protected $fillable = [
        'name', 'type', 'short_description','full_description'
    ];
    public function test()
    {
        return $this->hasMany('App\Models\Questions');
    }
    
    public function user(){
        return $this->hasMany('App\Models\TestStudent');
    }
    public function result()
    {
        return $this->hasMany('App\Models\Results');
    }
}
