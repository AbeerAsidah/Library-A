<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->bigInteger('categories_id');
            $table->bigInteger('authors_id');
            $table->bigInteger('publishing_houses_id');
            $table->bigInteger('languages_id');
            $table->boolean('is_new');
            $table->date('date_publication');
            $table->string('evaluation');
            $table->Integer('number_pages');
            $table->double('volume');
            $table->Integer('number_readers');
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
        Schema::dropIfExists('books');
    }
}
