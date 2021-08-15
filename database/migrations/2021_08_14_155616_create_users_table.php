<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('lastnames',45);
            $table->string('email',45);

            $table->unsignedBigInteger('document_type_id');
            $table->foreign('document_type_id')->references('id')->on('document_type');

            $table->unsignedBigInteger('genders_id');
            $table->foreign('genders_id')->references('id')->on('genders');

            $table->unsignedBigInteger('cities_id');
            $table->foreign('cities_id')->references('id')->on('cities');

            $table->unsignedBigInteger('cities_departments_id');
            $table->foreign('cities_departments_id')->references('id')->on('cities');

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
        Schema::dropIfExists('users');
    }
}
