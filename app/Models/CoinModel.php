<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "coin_data";

    protected $fillable = [
        "coin_category",
        "symbol",
        "founder",
        "cofounder",
        "transactions_per_second",
        "blocktime",
        "transactions_fees",
    ];
}
