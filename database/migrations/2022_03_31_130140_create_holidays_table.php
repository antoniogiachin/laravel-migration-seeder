<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();

            //definisco elementi tabella, nome, prezzo, rimborso, destinazione, numero persone, data di inizio, data di fine, all inclusive (bool), mezzo di trasporto, descrizione
            
            //nome
            $table->string('name', 100);

            //prezzo
            $table->float('amount', 8, 2);

            //rimborso e all inclusive booleano
            $table->tinyInteger('refound');
            $table->tinyInteger('all_inclusive');

            //destinazione
            $table->string('destination', 100);

            //numero persone
            $table->unsignedTinyInteger('person_number');

            //data di inizio
            $table->date('start_date');

            //data fine 
            $table->date('end_date');

            // mezzo di trasporto
            $table->string('transport', 50);

            // descrizione
            $table->text('description')->nullable();


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
        Schema::dropIfExists('holidays');
    }
}
