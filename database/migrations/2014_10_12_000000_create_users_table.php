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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('username');
            $table->text('password');
            $table->string('level');
            $table->string('nama');

        });
        Schema::create('penilaian', function (Blueprint $table) {
            $table->increments('penilaian_id');
            $table->integer('user_id');
            $table->integer('pelamar_id');
            $table->integer('kesehatan');
            $table->integer('pengalaman');
            $table->integer('sertifikat');
            $table->integer('pendidikan');

        });
        // Schema::create('jabatan', function (Blueprint $table) {
        //   $table->increments('jabatan_id');
        //   $table->string('nama');
        //   $table->string('deskripsi');

        // });
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('lowongan_id');
            $table->string('jabatan_id');
            $table->integer('jumlah_penerima');

        });
        Schema::create('lowongan_pelamar', function (Blueprint $table) {
            $table->increments('lowongan_user_id');
            $table->integer('user_id');
            $table->integer('lowongan_id');
            $table->integer('skor')->nullable();
            $table->text('hasil_seleksi')->nullable();
        });
        Schema::create('file', function (Blueprint $table) {
            $table->increments('file_id');
            $table->integer('user_id');
            $table->integer('lamaran_id')->nullable();
            $table->text('surat_kesehatan')->nullable();
            $table->text('cv')->nullable();
            $table->text('ijazah')->nullable();
            $table->text('ktp')->nullable();
            $table->text('skck')->nullable();
            $table->text('sertifikasi')->nullable();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {}
};
