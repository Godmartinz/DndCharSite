<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackgroundModel extends Model
{
    protected $fillable = [
        'background_id',
        'name',
        'description',
        'skillProficency',
        'toolProficency',
        'languages',
        'alignment',
        'skills',
    ];

    public function items(){
        return $this->hasMany('\app\ItemModel', 'item_id');
    }
    public function user(){
        return $this->belongsTo('\app\Users', 'user_id');
    }
}
