<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tips";

    protected $fillable = [
        'user_first_name',
        'user_last_name'

    ];
}
