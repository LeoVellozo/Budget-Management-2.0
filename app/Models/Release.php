<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;

    // protected $fillable = [
    //         'name',
    //         'type',
    //         'category',
    //         'value',
    //         'obs',
    //         // 'user_id',
    //         'data_release'
    // ];

    protected $guarded = [];
}
