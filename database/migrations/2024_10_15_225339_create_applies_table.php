<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platform_id')->nullable();
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->dateTime('connect_time')->nullable();
            $table->integer('status');
            $table->string('link', 255)->nullable(); // Добавляем столбец link после статуса
            $table->integer('customer_rate')->nullable();
            $table->integer('specialist_rate')->nullable();
            $table->string('customer_comment', 250)->nullable();
            $table->string('specialist_comment', 250)->nullable();
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
        Schema::dropIfExists('applies');
    }
}
