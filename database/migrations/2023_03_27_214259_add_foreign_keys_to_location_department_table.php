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
        Schema::connection('mysql2')->table('location_department', function (Blueprint $table) {
            $table->foreign(['department_id'], 'FK_location_department_departments')->references(['department_id'])->on('departments')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['location_id'], 'FK_location_department_locations')->references(['location_id'])->on('locations')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('location_department', function (Blueprint $table) {
            $table->dropForeign('FK_location_department_departments');
            $table->dropForeign('FK_location_department_locations');
        });
    }
};
