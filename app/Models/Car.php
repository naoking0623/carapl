<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'neme' => 'required',
        'odometer' => 'required',
        'inspection' => 'required',
        'image_path' => 'required',
        );
        
}
