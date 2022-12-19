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
            $table->bigIncrements('id');
            $table->string('company', 80)->default('Italo');
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->time('departure_hour');
            $table->time('arrival_hour');
            $table->string('designatedTrain', 100)->unique();
            $table->unsignedSmallInteger('wagonsNumber');
            $table->boolean('delayed');
            $table->boolean('canceled');
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
