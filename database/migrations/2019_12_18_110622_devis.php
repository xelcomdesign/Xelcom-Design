<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Devis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->text('prenom_nom');
            $table->string('email');
            $table->integer('telephone');
            $table->text('nom_produit');
            $table->integer('quantite_produit');
            $table->text('designation');
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
        Schema::dropIfExists('devis');
    }
}
