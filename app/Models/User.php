<?php

namespace App\Models;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;


class User extends SentinelModel implements Authenticatable
{
    use SoftDeletes,AuthenticableTrait,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'permissions',
        'last_login',
        'name',
        'is_active',
        'role_name',
        'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} user";
    }

            /**
     * Get user's profile picture.
     *
     * @return string
     */
    public function isSuperAdmin() {
        if ( $this->roles[0]->slug == 'super-admin' ) {
            return true;
        } else {
            return false;
        }
    }

    public function isAdmin() {
        if ( $this->roles[0]->slug == 'admin' ) {
            return true;
        } else {
            return false;
        }
    }

    public function isUser() {
        if ( $this->roles[0]->slug == 'user' ) {
            return true;
        } else {
            return false;
        }
    }

    // /**
    //  * The directories belongs to broadcasts.
    //  *
    //  * @return     \Illuminate\Database\Eloquent\Relations\BelongsToMany
    //  */
    // public function roles()
    // {
    //     return $this->belongsToMany( Role::class, 'role_users' );
    // }

    /**
     * Returns the roles relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    /**
     * Returns the roles relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }

}
