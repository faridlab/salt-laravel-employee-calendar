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
        Schema::create('calendar_employee_statuses', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('calendar_id')->references('id')->on('calendars');
            $table->enum('employment_status', ['permanent', 'contract', 'probation', 'assosiate']);

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
        Schema::dropIfExists('calendar_employee_statuses');
    }
};
