<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
                /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "upcomings";

    protected $fillable = [
        'id',
        'title',
        'tanggal',
        'deskripsi',
        'image',
        'image2',
        'created_at',
        'updated_at'
    ];
}
