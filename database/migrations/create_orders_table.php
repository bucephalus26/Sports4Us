<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->string('name',20);
            $table->string('email',50);
            $table->string('address',200);
            $table->string('phone',20);
            $table->integer('total');
            $table->string('note',150)->nullable();
            $table->string('IP',20);
            $table->string('status',30)->default('New');
            $table->timestamps();
        });
    }
}