<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            // вказати движок БД
            // $table->engine = 'InnoDB';

            // створює поле id, тип даних INT, AUTO_INCREMENT, PRIMARY_KEY
            $table->increments('id');

            // створимо стовпчик формату VARCHAR
            $table->string('name', 100);

            // створимо стовпчик формату TEXT
            $table->text('text');

            $table->string('img', 255);

            // створює 2 стовпці з даними про час створення і час останньої модифікації
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
        Schema::drop('articles');
    }
}
