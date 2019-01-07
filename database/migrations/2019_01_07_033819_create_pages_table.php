<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        //Insert some stuff
        DB::table('pages')->insert(array(
            array(
                'name' => 'Documentation',
                'slug' => 'https://laravel.com/docs'
            ),
            array(
                'name' => 'Laracasts',
                'slug' => 'https://laravel.com/docs'
            ),
            array(
                'name' => 'News',
                'slug' => 'https://laravel.com/docs'
            ),
            array(
                'name' => 'Nova',
                'slug' => 'https://laravel.com/docs'
            ),
            array(
                'name' => 'Forge',
                'slug' => 'https://laravel.com/docs'
            ),
            array(
                'name' => 'Github',
                'slug' => 'https://github.com/laravel/laravel'
            ))
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
