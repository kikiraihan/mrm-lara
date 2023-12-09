<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            // - Judul
            $table->string('judul',255);
            // - enum kategori arsitektur, interior & religion projeck
            $table->enum('kategori',[
                'arsitektur',
                'interior',
                'religion project'
            ]);
            // - lokasi string
            $table->string('lokasi',500);
            // - tahun
            $table->year('tahun');
            // - luas situs double
            $table->double('luas_situs');
            // - luas lantai
            $table->double('luas_lantai');
            // - tinggi
            $table->integer('tinggi');
            // - pic
            $table->string('pic',500);
            // - tipe
            $table->string('tipe',255);
            // - cover
            $table->string('cover',500)->nullable();
            
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
        Schema::dropIfExists('portfolios');
    }
}
