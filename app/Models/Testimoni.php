<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "testimonis";

    protected $fillable = [
        'id',
        'title',
        'deskripsi',
        'image',
        'created_at',
        'updated_at'
    ];
}
