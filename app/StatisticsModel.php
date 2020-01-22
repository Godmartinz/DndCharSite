<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatisticsModel extends Model
{

protected $fillable = [
    'statistics_id',
    'strength',
    'dexterity',
    'intelligence',
    'wisdom',
    'charisma',
    'armor',
    'speed',
    'savingThrows',
    'hitPoints',
    'profBonus',
];

public function background() {
    return $this->belongsTo('\app\BackgroundModel', 'background_id');
}
}
