<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("code")->unique();
            $table->unsignedBigInteger('user_id');
            $table->integer('amount');
            $table->string('nom');
            $table->string('prenom');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->text('adresse');
            $table->string('region');
            $table->string('ville');
            $table->enum('status', [0, 1, 2])->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('orders');
    }
}
