<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "programs";

    protected $fillable = [
        'id',
        'title',
        'image',
        'created_at',
        'updated_at'
    ];
}
