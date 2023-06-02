<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pays;
use App\Models\Sexe;
use App\Models\Profession;
use App\Models\Mere;
use App\Models\Pere;

class CreateEnrolersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolers', function (Blueprint $table) {
            $table->integer('idenrolant')->primary();
            $table->timestamps();
            $table->date('datenaissance')->nullable();
            $table->string('nom', 50)->nullable();
            $table->string('prenom', 50)->nullable();
            $table->time('heurenaissance')->nullable();
            $table->string('lieunaissance', 50)->nullable();
            $table->integer('nni')->nullable();
            $table->integer('taille')->nullable();
            $table->string('lienphoto', 50)->nullable();
            $table->string('lienempreinte', 50)->nullable();
            $table->string('liensignature', 50)->nullable();
            $table->string('visa', 50)->nullable();
            $table->string('signataire', 50)->nullable();
            $table->date('dateemission')->nullable();
            $table->date('dateexpiration')->nullable();
            $table->string('dateenrolement', 50)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->string('idpays', 3);
            $table->string('idsexe', 2);
            $table->integer('idprofession');
            $table->integer('idmere');
            $table->integer('idpere');
            $table->integer('idstatut');

            // Clés étrangères
            $table->foreign('idpays')->references('idpays')->on('pays');
            $table->foreign('idsexe')->references('idsexe')->on('sexe');
            $table->foreign('idprofession')->references('idprofession')->on('profession');
            $table->foreign('idmere')->references('idmere')->on('mere');
            $table->foreign('idpere')->references('idpere')->on('pere');
            $table->foreign('idstatut')->references('idstatut')->on('statut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolers');
    }
}
