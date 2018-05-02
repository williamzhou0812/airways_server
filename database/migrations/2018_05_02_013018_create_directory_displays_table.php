<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_displays', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('heading',200);
            $table->string('subheading',200);
            $table->string('left_description',3000);
            $table->string('right_description',3000);
            $table->string('image_path',1000);

            $table->integer('section_id');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directory_displays');
    }
}
