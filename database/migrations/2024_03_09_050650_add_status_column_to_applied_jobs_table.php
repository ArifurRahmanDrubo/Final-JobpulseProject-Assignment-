<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->enum('status', ['selected', 'unselected', 'rejected'])->default('unselected');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
