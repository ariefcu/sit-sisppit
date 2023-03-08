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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nisl')->unique();
            $table->bigInteger('nisn');
            $table->bigInteger('nik');
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->integer('kelas');
            $table->string('kelas_paralel'); //masih dipakai ga nih?
            $table->string('kelas_paralel_kemenag'); //masih dipakai ga nih?
            $table->string('nomor_absen'); 
            $table->string('status');
            $table->string('asal_sekolah');
            $table->string('npsn_asal_sekolah');
            $table->string('hoby');
            $table->string('cita-cita');
            $table->string('anak_ke_berapa');
            $table->string('dari_berapa_anak');
            $table->string('jumlah_saudara');
            $table->string('Jenis_sekolah');
            $table->string('status_sekolah');
            $table->string('kota_kabupaten_sekolah');
            $table->integer('nomor_peserta_ujian');
            
            $table->integer('nomor_kartu_keluarga');
            $table->integer('nik_bapak');
            $table->string('nama_bapak');
            $table->string('tempat_lahir_bapak');
            $table->date('tanggal_lahir_bapak');
            $table->string('pendidikan_bapak');
            $table->string('pekerjaan_bapak');
            $table->integer('nomor_kontak_bapak');
            $table->string('alamat_bapak');
            
            $table->integer('nik_ibu');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->integer('nomor_kontak_ibu');
            $table->string('alamat_ibu');
            
            $table->integer('rata_rata_penghasilan');
            
            $table->integer('nomor_skhun');
            $table->integer('nomor_ijazah');
            $table->integer('nilai_total');
            $table->string('yatim');
            $table->string('asrama');
            $table->string('agk');
            $table->string('aktif');
            $table->string('nama_arab');
            $table->string('online');
            
            $table->timestamps();
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('santris');
    }
};
