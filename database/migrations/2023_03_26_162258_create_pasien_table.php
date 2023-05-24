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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama',150);
            $table->string('tempatlahir',25);
            $table->date('tgl_lahir');
            $table->enum('jeniskelamin', ['Laki-laki','Perempuan']);
            $table->string('alamat');
            $table->enum('layanan_kesehatan', ['umum','bpjs','asuransi']);
            $table->string('no_layanan', 20)->uniqe();
            $table->text('fotoktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
