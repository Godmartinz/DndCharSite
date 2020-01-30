<?php

namespace App\Http\Controllers;

use App\CharacterModel;
use App\User;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function showCharacter($character_id)
    {
        return view('character.profile', ['character' => CharacterModel::findOrFail($character_id)]);


    }

    public function index($user_id)
    {
        return view ('character.list', []);
    }

}
