<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Title');
            $table->text('Subject');
            $table->text('Picture1');
            $table->text('Picture2');
            $table->text('Picture3');
            $table->text('Language');
            $table->text('Visits');
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
        Schema::dropIfExists('Blog');
    }
}
