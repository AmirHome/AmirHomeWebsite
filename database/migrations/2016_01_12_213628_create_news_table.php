<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateNewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('news',function(Blueprint $table){
            $table->increments("id");
            $table->string("items_id");
            $table->string("keywords")->nullable();
            $table->string("originId")->nullable();
            $table->string("title")->nullable();
            $table->dateTime("published")->nullable();
            $table->text("content")->nullable();
            $table->string("visual_url")->nullable();
            $table->enum("direction", ["rtl", "ltr"])->nullable();
            $table->enum("language", ["fa", "en", "tr"])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }

}