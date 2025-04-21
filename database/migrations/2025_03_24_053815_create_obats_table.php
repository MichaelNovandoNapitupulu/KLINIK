<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration {
    public function up(): void
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->integer('stok');
            $table->foreignId('dokter_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('obats');
    }
}
