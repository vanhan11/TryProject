<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tours";

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
