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
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('count');
            $table->longText('description');
            $table->timestamps();
        //  khoa ngoai
        //     $table->unsignedBigInteger('category_id');
        //     $table ->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        //     $table ->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreignId('category_id')->constrained('categories');
        //     ->onDelete('set null');
        });
    //  mot category co nhieu foods
        // Schema::create('categories', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->longText('description');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    //     Schema::table('foods', function(Blueprint $table)
    // {
    //     $table->dropForeign('foods_category_id_foreign'); 
    // });
        // Schema::dropIfExists('categories');
    }
};






