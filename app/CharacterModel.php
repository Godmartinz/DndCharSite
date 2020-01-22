<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterModel extends Model
{
    protected $fillable = [
        'character_id',

    ];

    public function background()
    {
        return $this->hasOne('\app\BackgroundModel', 'background_id');
    }
    public function race()
    {
        return $this->hasOne('\app\Race', 'race_id');
    }
    public function user()
    {
        return $this->belongsTo('\app\User', 'user_id');
    }
    public function items()
    {
        return $this->hasMany('\app\ItemModel', 'item_id');
    }
    public function statistics()
    {
        return $this->hasOne('\app\StatisticsModel', "statistics_id");
    }
}
