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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('choice_id');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->foreign('choice_id')->references('id')->on('choices')->onDelete('cascade');
            
            // character_idとchoice_idの組み合わせの重複を許さない
            $table->unique(['character_id', 'choice_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
