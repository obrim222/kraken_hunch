<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class PostCommentModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "blogs";


    protected $fillable = [
        'comment',
        'blog'
       ];

       protected $guarded = [];
}
