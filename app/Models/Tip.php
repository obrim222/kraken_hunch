<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tips';

    protected $fillable = [
        'price_at_time_of_tip ',
        'tip_currency',
        'date_now',
        'date_end',
        'reason_up',
        'reason_down',
        'reason_description',
        'calculated_tip_price',
        'tip_percentage',
        'tip_direction',
        'coin_id'
    ];
}
