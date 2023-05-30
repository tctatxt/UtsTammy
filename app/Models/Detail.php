<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);

    }

    public function post(){
        return $this->belongsTo(Post::class);

    }
}

