<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable =[
        'race'
    ];
    //

    public function background(){
        return $this->belongsToMany('\app\BackgroundModel', 'background_id');
    }
}
