<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('character_id');
            $table->integer('sort')->default(10);
            $table-> varchar('name',  30);
            $table->string('Race, Elf, Dwarf, Human, Bard');
            $table->text('description');
            $table->text('skillProficency');
            $table->text('toolProficency');
            $table->text('languages');
            $table->string('alignment, good, lawful, evil, chaotic');
            $table->text('skills');
            $table->integer('strength', 1);
            $table->integer('dexterity', 1);
            $table->integer('intelligence', 1);
            $table->integer('wisdom', 1);
            $table->integer('charisma', 1);
            $table->integer('armor', 1);
            $table->integer('speed', 1);
            $table->integer('savingThrows', 1);
            $table->integer('hitPoints', 1);
            $table->integer('profBonus', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
