<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('service_details', function (Blueprint $table) {
            $table->enum('tipe_card', ['main', 'sub'])->default('main')->after('service_category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_details', function (Blueprint $table) {
            $table->dropColumn('tipe_card');
        });
    }
};
