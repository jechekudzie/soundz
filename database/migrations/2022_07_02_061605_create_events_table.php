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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_type_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('artist')->nullable();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->longText('location')->nullable();
            $table->unsignedBigInteger('ticket_type_id')->nullable();
            $table->string('image')->nullable();
            $table->boolean('published')->default(0);
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
        Schema::dropIfExists('events');
    }
};
