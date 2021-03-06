<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public function category(){
        return $this->belongsTo("App\Category");
    }

    public function tags(){
        return $this->belongsToMany("App\Tag");
    }

    protected $fillable = ["title", "content", "category_id"];

    public static function generateSlug($title){
        $slug =  Str::slug($title);
        $slug_originale = $slug;

        $post_presente = Post::where("slug", $slug)->first();

        $i= 1;
        while($post_presente){
            $slug = $slug_originale . "-" . $i;
            $i++;
            $post_presente = Post::where("slug", $slug)->first();
        }

        return $slug;
    }
}
