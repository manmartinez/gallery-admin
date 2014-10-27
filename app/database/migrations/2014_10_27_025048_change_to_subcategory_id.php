<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeToSubcategoryId extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function($table){
            $table->dropColumn('subcategory');
            $table->integer('subcategory_id')->unsigned()->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function($table){
            $table->string('subcategory', 50)->nullable();
            $table->dropForeign('photos_subcategory_id_foreign');
            $table->dropColumn('subcategory_id');
        });
    }

}
