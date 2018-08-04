<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaidToJornadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('jornadas', function (Blueprint $table) {
            $table->double( 'importe' );
            $table->tinyInteger( 'esta_pago' )->default( 0 );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jornadas', function($table) {
            $table->double( 'importe' );
            $table->tinyInteger( 'esta_pago' )->default( 0 );
        });
    }
}
