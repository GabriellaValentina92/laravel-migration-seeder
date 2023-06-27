<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('Azienda', 20);
            $table->string('Stazione di partenza', 30);
            $table->string('Stazione di arrivo', 30);
            $table-> dateTime('Orario di partenza');
            $table-> dateTime('Orario di arrivo');
            $table-> char('Codice Treno', 10);
            $table-> tinyInteger('Numero Carrozze', 50);
            $table-> boolean('In orario');
            $table-> boolean('Cancellato');

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
        Schema::dropIfExists('trains');
    }
};
