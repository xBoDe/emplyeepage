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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("Name");
            $table->string("FatherName");
            $table->string("CNIC")->unique();
            $table->string("Phone");
            $table->string("Address");
            $table->string("location");
            // $table->integer("empManagerCode")->nullable();
            // $table->integer("DepartmentCode")->nullable();
            // $table->foreign('DepartmentCode')->references('DepartmentCode')->on('Department')->onDelete('cascade');
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
        Schema::dropIfExists('listings');
    }
};
