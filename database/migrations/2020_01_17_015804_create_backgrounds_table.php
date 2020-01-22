<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->bigIncrements('background_id');
            $table-> varchar('name',  30);
            $table->text('description');
            $table->text('skillProficency');
            $table->text('toolProficency');
            $table->text('languages');
            $table->enum('alignment', array('good', 'lawful', 'evil', 'chaotic'));
            $table->text('skills');
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
        Schema::dropIfExists('backgrounds');
    }
}
