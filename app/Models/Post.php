<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Post extends Model
{
    use HasFactory;
    public static function getPostSearch($search){
        $posts = DB::table('posts')->join('users','author_id','=','users.id')
                ->where('title','like','%'.$search.'%')
                ->orWhere('description','like','%'.$search.'%')
                ->orWhere('name','like','like','%'.$search.'%')
                ->orderByDesc('posts.created_at')->get();
        return $posts;
    }

}
