<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmploiGei2EE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploiGei2EE', function (Blueprint $table) {
            $table->increments('idEmploi');
            $table->string('jours',255);
            $table->string('heureMatin1')->nullable();
            $table->string('heureMatin2')->nullable();
            $table->string('heureSoir1')->nullable();
            $table->string('heureSoir2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emploiGei2EE');
    }
}
