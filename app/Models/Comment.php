<?php

namespace App\Models;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
                /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "comments";

    protected $fillable = [
        'id',
        'user_id',
        'blog_id',
        'commentar',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
