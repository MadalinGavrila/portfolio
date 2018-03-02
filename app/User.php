<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role_id', 'photo_id', 'address', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $uploads = '/images/';

    public function checkRole($role) {
        if($this->role->name == $role) {
            return true;
        }

        return false;
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function skills() {
        return $this->hasMany('App\Skill');
    }

    public function projects() {
        return $this->hasMany('App\Project');
    }

    public function photoPlaceholder() {
        return $this->uploads . "placeholder_user.jpg";
    }

}
