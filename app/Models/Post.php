<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Post extends Model
{
    use HasFactory;

//    protected $primaryKey = 'post_id';

    public static function getPostSearch($search){
        $posts = DB::table('posts')->join('users','author_id','=','users.id')
                ->select('posts.*','name')
                ->where('title','like','%'.$search.'%')
                ->orWhere('description','like','%'.$search.'%')
                ->orWhere('name','like','like','%'.$search.'%')
                ->orderByDesc('posts.created_at')->get();

        return $posts;
    }
    public static function getPosts(){
        $posts = DB::table('posts')
            ->join('users','author_id','=','users.id')
            ->select('posts.*','name')
            ->orderByDesc('posts.created_at')->paginate(4);
        return $posts;
    }

    public static function FindById($id)
    {
        $post = DB::table('posts')->join('users','author_id','=','users.id')
                ->select('posts.*','name')
                ->where('posts.id',$id)->first();
        return $post;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function createdAtForHumans(){
        return $this->created_at->diffForHumans();

    }




}
