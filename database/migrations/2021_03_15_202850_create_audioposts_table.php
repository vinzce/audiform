<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudiopostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audioposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('audio_file_path');
            $table->string('thumb_file_path');
            $table->longText('description');
            $table->timestamps();
        });

        Schema::table('audioposts', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audioposts');
    }
}
