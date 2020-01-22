<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{

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

    public function background()
    {
        return $this->belongsToMany('\app\BackgroundModel', 'background_id' );
    }


}
