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
            $table->renameColumn('name', 'nama_santri');
            $table->renameColumn('penjemput', 'nama_penjemput');
            $table->dropColumn('detail');
            $table->boolean('hubungan_keluarga')->after('penjemput');
            $table->boolean('nomor_hp_penjemput')->after('hubungan_keluarga');
            $table->boolean('status_izin')->after('nomor_hp_penjemput');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('izins', function (Blueprint $table) {
            $table->renameColumn('nama_santri', 'name');
            $table->renameColumn('nama_penjemput', 'penjemput');
            $table->text('detail')->after('nama_penjemput');
            $table->dropColumn('hubungan_keluarga');
            $table->dropColumn('nomor_hp_penjemput');
            $table->dropColumn('status_izin');
        });
    }
};
