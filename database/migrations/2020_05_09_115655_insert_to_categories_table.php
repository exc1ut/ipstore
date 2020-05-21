<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertToCategoriesTable extends Migration
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
                'name' => 'Computers'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'Accessories'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'Notebooks'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'Creams'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'Soap'
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'Detergent'
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
        
    }
}
