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
        Schema::create('calon_pemilihs', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lengkap");
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->bigInteger('provinsi_id');
            $table->bigInteger('kabupaten_id');
            $table->bigInteger('kecamatan_id');
            $table->bigInteger('kelurahan_id');
            $table->bigInteger('desa_id');
            $table->string('scan_ktp');
            $table->string('foto');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_pemilihs');
    }
};
