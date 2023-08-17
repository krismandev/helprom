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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('identity');
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('phone');
            $table->enum('marriage_status', ['kawin', 'belum kawin', 'cerai hidup', 'cerai mati']);
            $table->string('address');
            $table->string('occupation');
            $table->string('faculty');
            $table->string('major');
            $table->string('posbindu');
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
        Schema::dropIfExists('patients');
    }
};
