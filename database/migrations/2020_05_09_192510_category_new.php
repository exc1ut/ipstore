<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CategoryNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert(
            array(
                'name' => 'Beauty & Health'
            )
        ); 
        DB::table('categories')->insert(
            array(
                'name' => 'Jewelry & Watches'
            )
        ); 
        DB::table('categories')->insert(
            array(
                'name' => 'Bag & Shoes'
            )
        ); 
        DB::table('categories')->insert(
            array(
                'name' => 'Clothes'
            )
        ); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
