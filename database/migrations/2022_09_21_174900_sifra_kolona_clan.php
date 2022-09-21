<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clans', function (Blueprint $table) {
            $table->after('id',function ($table){
                $table->string('sifra')->unique();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clans', function (Blueprint $table) {
            $table->dropColumn('sifra');
        });
    }
};
