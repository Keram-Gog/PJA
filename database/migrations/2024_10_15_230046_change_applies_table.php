<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applies', function (Blueprint $table) {
            $table->unsignedBigInteger('platform_id')->nullable()->change();
            $table->dateTime('connect_time')->nullable()->change();
            $table->integer('customer_rate')->nullable()->change();
            $table->integer('specialist_rate')->nullable()->change();
            $table->string('customer_comment', 250)->nullable()->change();
            $table->string('specialist_comment', 250)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platform_id')->nullable(true)->change();
            $table->dateTime('connect_time')->nullable(true)->change();
            $table->integer('customer_rate')->nullable(true)->change();
            $table->integer('specialist_rate')->nullable(true)->change();
            $table->string('customer_comment', 250)->nullable(true)->change();
            $table->string('specialist_comment', 250)->nullable(true)->change();
        });
    }
}
