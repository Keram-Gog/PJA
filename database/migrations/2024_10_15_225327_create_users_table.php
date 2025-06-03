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
            $table->string('email', 30);
            $table->string('password', 70);
            $table->string('name', 20)->nullable();
            $table->string('surname', 20)->nullable();
            $table->string('patronymic', 20)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('about', 250)->nullable();
            $table->string('portfolio', 400)->nullable();
            
            // Добавляем поле city_id с внешним ключом на таблицу cities
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');

            // Поле для роли пользователя
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');

            $table->timestamps();
            $table->string('remember_token', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Удаляем внешние ключи
            $table->dropForeign(['role_id']);
            $table->dropForeign(['city_id']);
        });

        // Если у вас есть таблицы, ссылающиеся на users, например:
        Schema::table('specialization__users', function (Blueprint $table) {
            $table->dropForeign(['specialist_id']);
        });

        Schema::table('skill__users', function (Blueprint $table) {
            $table->dropForeign(['specialist_id']);
        });

        // Теперь можно безопасно удалить таблицу users
        Schema::dropIfExists('users');
    }
}
