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
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            //не обяз
            $table->string('patronymic')->nullable();
            //уник
            $table->string('login')->unique();
            //уник
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            //д.б. не менее 6-ти символов
            $table->string('password');
            
            $table->rememberToken();
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
        Schema::dropIfExists('admin_users');
    }
};