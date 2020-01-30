<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class CharacterModel extends Model
{
    use ValidatingTrait;
    protected $rules = [
        'character_id'            => 'required',
        'race'        => 'required',
        'strength'       => 'integer|nullable',
        'dexterity'      => 'integer|nullable',
        'intelligence' => 'integer|nullable',
        'wisdom'        => 'integer|nullable',
        'charisma'   => 'integer|nullable',
        'armor'    => 'integer|nullable',
        'speed'     => 'numeric|nullable',
        'savingThrows'       => 'nullable',
        'hitPoints'          => 'integer|digits_between:0,255',
        'profBonus'          => 'nullable',
        'description'   => 'string|nullable',
        'skillProficency'  => 'string|nullable',
        'toolProficency'  => 'string|nullable',
        'languages' => 'string|nullable',
        'alignment' => 'string|nullable',
        'skills' => 'string|nullable',
    ];
    protected $fillable = [
        'character_id',
        'race',
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
        'description',
        'skillProficency',
        'toolProficency',
        'languages',
        'alignment',
        'skills',

    ];



    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }
    public function items()
    {
        return $this->hasMany('\App\ItemModel', 'item_id');
    }

}
