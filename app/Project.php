<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'user_id', 'photo_id', 'name', 'url'
    ];

    protected $uploads = '/images/';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function photoPlaceholder() {
        return $this->uploads . "placeholder_project.jpg";
    }

}
