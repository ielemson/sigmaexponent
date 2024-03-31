<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $fillable = ['title', 'slug', 'content', 'image', 'user_id','status','meta_title','meta_description','published_at','meta_keywords','cat_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
