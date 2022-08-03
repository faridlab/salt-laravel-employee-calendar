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
        Schema::create('calendar_branches', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('calendar_id')->references('id')->on('calendars');
            $table->foreignUuid('organization_id')->references('id')->on('organizations');

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
        Schema::dropIfExists('calendar_branches');
    }
};
