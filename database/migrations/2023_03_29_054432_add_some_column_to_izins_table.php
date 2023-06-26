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
            $table->integer('kelas')->after('name');
            $table->integer('sakan')->after('kelas');
            $table->timestamp('tanggal')->after('sakan');
            $table->string('penjemput')->after('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('izins', function (Blueprint $table) {
            $table->dropColumn('kelas');
            $table->dropColumn('sakan');
            $table->dropColumn('tanggal');
            $table->dropColumn('penjemput');
        });
    }
};
