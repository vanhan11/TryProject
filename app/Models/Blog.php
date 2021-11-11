<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use Sluggable;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "blogs";

    protected $fillable = [
        'id',
        'title',
        'deskripsi',
        'image',
        'created_at',
        'updated_at',
        'slug'
    ];

    /**
     * slug for menu name
     *
     * @return     array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ],
        ];
    }

}
