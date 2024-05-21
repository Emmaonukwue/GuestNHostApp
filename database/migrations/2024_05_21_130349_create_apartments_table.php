<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('number_of_guests');
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_kitchens');
            $table->decimal('amount', 8, 2);
            $table->decimal('caution_fee', 8, 2)->nullable();
            $table->string('cover_image');
            $table->json('main_images');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}