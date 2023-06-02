<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Profession;

class CreateMeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meres', function (Blueprint $table) {
           
            $table->timestamps();
            $table->integer('idmere')->primary();
            $table->string('nommere', 50)->nullable();
            $table->string('prenommere', 50)->nullable();
            $table->string('datenaissmere', 50)->nullable();
            $table->integer('idprofession');
            $table->foreign('idprofession')->references('idprofession')->on('profession');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meres');
    }
}
