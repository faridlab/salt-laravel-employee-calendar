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
        Schema::create('calendar_religions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('calendar_id')->references('id')->on('calendars');
            $table->foreignUuid('religion_id')->references('id')->on('religions');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_religions');
    }
};
