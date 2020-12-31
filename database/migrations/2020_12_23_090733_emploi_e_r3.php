<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmploiER3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ER3', function (Blueprint $table) {
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
        Schema::dropIfExists('ER3');
    }
}
