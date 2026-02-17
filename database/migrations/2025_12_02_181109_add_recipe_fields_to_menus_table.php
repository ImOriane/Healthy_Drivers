<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->text('ingredients')->nullable();
            $table->text('preparation')->nullable();
            $table->integer('temps_preparation')->nullable(); // en minutes
            $table->integer('calories')->nullable();
            $table->string('slug')->unique()->nullable();
        });
    }

    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn(['ingredients', 'preparation', 'temps_preparation', 'calories', 'slug']);
        });
    }
};
