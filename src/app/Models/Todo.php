<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'content'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 自分の解答（ChatGPT曰く古い書き方らしい）
    // public function category(){
    //     return $this->belongsTo('App\Models\Category');
    // }
}
