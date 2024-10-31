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
            $table->string('jabatan');
            $table->string('jenis_asn');
            $table->foreignId('unit_kerja_id')->nullable()->constrained('unit_kerjas');
            $table->timestamps();
        });

        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('subjudul');
            $table->text('gambar');
            $table->string('cta');
            $table->string('link');
            $table->tinyInteger('is_aktif');
            $table->timestamps();
        });

        Schema::create('web_profiles', function (Blueprint $table) {
            $table->id();
            $table->json('meta');
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
