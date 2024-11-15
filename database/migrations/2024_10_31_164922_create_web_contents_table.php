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
        Schema::create('unit_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidang');
            $table->timestamps();
        });

        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('NIP');
            $table->string('nama');
            $table->string('pangkat_gol');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jabatan');
            $table->string('jenis_jabatan');
            $table->text('photo')->nullable();
            $table->foreignId('unit_kerja_id')->nullable()->constrained('unit_kerjas');
            $table->timestamps();
        });

        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('subjudul');
            $table->text('gambar');
            $table->string('cta')->nullable();
            $table->string('link')->nullable();
            $table->tinyInteger('is_aktif');
            $table->timestamps();
        });

        Schema::create('web_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_skpd');
            $table->string('alias_skpd');
            $table->string(column: 'telp')->nullable();
            $table->string(column: 'email')->nullable();
            $table->json(column: 'sosmed')->nullable();
            $table->text('visi_misi');
            $table->text('tujuan_sasaran');
            $table->text('struktur_organisasi');
            $table->text('sasaran_strategis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
        Schema::dropIfExists('unit_kerjas');
        Schema::dropIfExists('banners');
        Schema::dropIfExists('web_profiles');
    }
};
