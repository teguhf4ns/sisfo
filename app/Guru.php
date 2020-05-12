<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{

    protected $fillable = [
        'user_id', 'nip'
    ];
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
