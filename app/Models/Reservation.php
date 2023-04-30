<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'reservation_date' => 'required',
        'reservation_time' => 'required',
        );
}
