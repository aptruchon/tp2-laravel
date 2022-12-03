<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Création de la table image
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->id();
            $table->id("col_id");
            $table->string('url')->unique();
            $table->integer('width');
            $table->integer('height');
            $table->string('slug')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * Destruction de la table image
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image');
    }
};
