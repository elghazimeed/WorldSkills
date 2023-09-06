<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('operations', function (Blueprint $table) {
        $table->id();
        $table->string('NuméroConsultation');
        $table->unsignedBigInteger('patient_id');
        $table->string('TypeConsultation');
        $table->string('Objet');
        $table->text('Observation');
        $table->date('Date');
        $table->string('BlocOperatoire');
        $table->dateTime('DateDebut');
        $table->dateTime('DateFin');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
