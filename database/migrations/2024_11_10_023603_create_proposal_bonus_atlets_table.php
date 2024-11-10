<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proposal_bonus_atlets', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('nama');
            $table->string('telp');
            $table->string('email');
            $table->text('ktp')->nullable();
            $table->string('no_piagam');
            $table->string('nama_kejuaraan');
            $table->string('kelas_cabor');
            $table->text('sk_pengprov')->nullable();
            $table->text('piagam')->nullable();
            $table->text('foto_medali')->nullable();
            $table->string('no_rekening');
            $table->string('nama_bank');
            $table->text('buku_tabungan')->nullable();
            $table->boolean('validasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_bonus_atlets');
    }
};
