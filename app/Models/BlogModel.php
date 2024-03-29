<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class BlogModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "blogs";


    protected $fillable = [
        'blog',
        'coin_id',
        'date',
        'comment'
    ];
}
