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
        Schema::create('calendar_departments', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('calendar_id')->references('id')->on('calendars');
            $table->foreignUuid('department_id')->references('id')->on('organization_structures');

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
        Schema::dropIfExists('calendar_departments');
    }
};
