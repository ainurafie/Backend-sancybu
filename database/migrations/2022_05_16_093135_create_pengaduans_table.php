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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('name_pengadu');
            $table->string('email_pengadu');
            $table->string('phone_pengadu');
            $table->string('nama_korban');
            $table->string('nik_korban');
            $table->string('phone_korban');
            $table->string('email_korban');
            $table->string('agama_korban');
            $table->text('alamat_korban');
            $table->string('account');
            $table->string('platform');
            $table->text('kronologi');
            $table->string('bukti');
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
        Schema::dropIfExists('pengaduans');
    }
};
