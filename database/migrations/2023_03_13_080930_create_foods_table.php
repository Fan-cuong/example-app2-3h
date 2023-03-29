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
            $table->id();
            $table->string('name')->nullable();
            $table->integer('count')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            // $table->foreignId('category_id')->constrained();
            // $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            // $table->foreign('category_id')->references('id')->on('categories');
        //  khoa ngoai
                                            
        //     $table ->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreignId('category_id')->constrained('categories');
        //     ->onDelete('set null');
        // $table ->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

        });
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






