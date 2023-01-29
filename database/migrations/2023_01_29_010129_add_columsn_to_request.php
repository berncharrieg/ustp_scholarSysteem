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
        Schema::table('Scholar_requests', function (Blueprint $table) {
            $table->string('school')->nullable();
            $table->string('semester')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Scholar_requests', function (Blueprint $table) {
            $table->dropColumn('school')->nullable();
            $table->dropColumn('semester')->nullable();
        });
    }
};
