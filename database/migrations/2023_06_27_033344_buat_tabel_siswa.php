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
            Schema::create("siswa", function (Blueprint $table) {
                $table->id();
                $table->string("nama");
                $table->text("alamat");
                $table->string("no_telp");
                $table->string("foto");
                $table->string("mengikuti_program");
                $table->string("harga_program");
                $table->string("pdf_sertifikat");
                $table->string("pdf_nilai");
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
        //
    }
};
