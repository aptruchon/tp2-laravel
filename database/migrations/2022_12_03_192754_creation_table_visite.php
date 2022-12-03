<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Création de la table visite
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visite', function (Blueprint $table) {
            $table->id();
            $table->id("img_id")->unique();
            $table->date("date");
            $table->string("userAgent");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * Destruction de la table visite
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visite');
    }
};
