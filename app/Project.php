<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'user_id', 'photo_id', 'name', 'url'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
