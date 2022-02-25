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
        Schema::create('health_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('street');
            $table->string('number');
            $table->string('sector');
            $table->string('city');
            $table->string('province');
            $table->string('zipcode');
            $table->softDeletes();
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
        Schema::dropIfExists('health_units');
    }
};
