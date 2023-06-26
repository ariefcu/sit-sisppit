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
        Schema::table('izins', function (Blueprint $table) {
            $table->renameColumn('tanggal', 'tanggal_keluar');
            $table->timestamp('tanggal_masuk')->after('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('izins', function (Blueprint $table) {
            $table->renameColumn('tanggal_keluar', 'tanggal');
            $table->dropColumn('tanggal_masuk');
        });
    }
};
