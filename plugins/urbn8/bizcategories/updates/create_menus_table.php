<?php namespace Urbn8\BizCategories\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMenusTable extends Migration
{

    public function up()
    {
        Schema::create('urbn8_bizcategories_menus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->integer('nest_left');
            $table->integer('nest_right');
            $table->integer('nest_depth')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('urbn8_bizcategories_menus');
    }

}