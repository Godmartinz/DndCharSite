<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;


class ItemModel extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'item_id' => 'required',
        'name'  => 'string|required',
        'rarity'    =>  'string|nullable',
        'baseType'  => 'string|nullable',
        'magicType' => 'string|nullable',
        'baseArmor' => 'integer|nullable',
        'itemDescription' =>'string|nullable',
        'goldCoin'  => 'integer|nullable',
    ];
    //
    protected  $fillable = [
        'item_id',
        'name',
        'rarity',
        'baseType',
        'magicType',
        'baseArmor',
        'itemDescription',
        'goldCoin',
    ];
    public function character()
    {
        return $this->belongsToMany('\App\CharacterModel', 'character_id' );
    }


}
