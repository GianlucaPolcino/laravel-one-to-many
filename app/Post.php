<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug'];

    public static function generateSlug($title){

        $slug = Str::slug($title);
        $slug_base = $slug;

        $present_post = Post::where('slug', $slug)->first();

        $c = 1;

        while($present_post){
            $slug = $slug_base . '-' . $c;
            $c++;
            $present_post = Post::where('slug', $slug)->first();
        }

        return $slug;
    }
}
