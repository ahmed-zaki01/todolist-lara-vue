<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCompletedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d-m h:i a') : null;
    } // end of getCompletedAtAttribute function

}
