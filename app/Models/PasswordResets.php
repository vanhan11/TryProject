<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
                /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "resets_passwords";

    protected $fillable = [
        'id',
        'email',
        'token',
        'created_at',
        'updated_at'
    ];
}
