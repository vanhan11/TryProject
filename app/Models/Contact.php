<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "contacts";

    protected $fillable = [
        'id',
        'name',
        'email',
        'emssage',
        'created_at',
        'updated_at'
    ];
}
