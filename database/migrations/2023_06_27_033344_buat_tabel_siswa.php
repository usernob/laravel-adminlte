<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_telp');
            $table
                ->string('foto')
                ->nullable()
                ->default('template/guest.jpg');
            $table->unsignedBigInteger('program_id');
            $table
                ->foreign('program_id')
                ->references('id')
                ->on('program');
            $table
                ->string('pdf_sertifikat')
                ->nullable()
                ->default('template/template.pdf');
            $table
                ->string('pdf_nilai')
                ->nullable()
                ->default('template/template.pdf');
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
