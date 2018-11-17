<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('articles')){
            Schema::table('articles', function (Blueprint $table) {
                if (!Schema::hasColumn('alias')){
                    $table->string('alias', 100);
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            // відкат дії
            $table->dropColumn('alias');
        });
    }
}
