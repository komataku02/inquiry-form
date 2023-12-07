<?php

use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->tinyInteger('gender')->comment('性別 : 1 : 男性 2 : 女性');
            $table->string('email');
            $table->char('postcode', 8);
            $table->string('address');
            $table->string('building')->nullable();
            $table->text('opinion',120);
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
        Schema::dropIfExists('contacts');
    }
}
