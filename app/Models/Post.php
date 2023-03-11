<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'content',
        'image_path',
    ];

    public function hr_title(){
        return $this->title;
    }

    public function hr_author(){
        return $this->author;
    }

    public function hr_created_at(){
        return $this->created_at;
    }

    public function get_image_url(){
        return Storage::url($this->image_path);
    }
}
