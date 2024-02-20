<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();

            $table->string('titre')->nullable();
            $table->string('auteur')->nullable();
            $table->text('description_pub')->nullable();
            $table->string('lien_pub')->nullable();
            $table->string('image')->nullable();

            $table->bigInteger('categorie_id')->unsigned()->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('publie')->default(false)->nullable();
            $table->timestamps();

           /* $table->date('date_pub')->nullable();

            $table->boolean('by_admin')->default(true);

            $table->bigInteger('count_view')->default(0);
            $table->boolean('visible_pub')->default(true);

            /*Pour les user
            $table->boolean('with_plan')->nullable();
            $table->bigInteger('type_plan')->nullable();
            $table->string('id_transaction')->nullable();
            $table->date('date_paiement')->nullable();
            $table->boolean('etat_paiement')->nullable();
            $table->bigInteger('etat_demande')->default(0);
            $table->string('raison_rejet')->nullable();
            $table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }
}
