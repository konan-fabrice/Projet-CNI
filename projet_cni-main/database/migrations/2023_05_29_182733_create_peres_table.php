<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Profession;

class CreatePeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peres', function (Blueprint $table) {
            $table->integer('idpere')->primary();
            
            $table->string('nompere', 50)->nullable();
            $table->string('prenompere', 50)->nullable();
            $table->date('datenaisspere')->nullable();
            $table->unsignedBigInteger('idprofession');
            $table->timestamps();
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
        Schema::dropIfExists('peres');
    }
}
