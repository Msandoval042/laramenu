<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsubcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catsubcats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->string('img');
            $table->integer('cat_id');
        });
        
        DB::table('catsubcats')->insert(array(
           array('type' => 'cat', 'title' => '2 For 20', 'img'=>'2420.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Better for You', 'img'=>'better4u.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Beverages', 'img'=>'beverages.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Handcrafted Burgers', 'img'=>'handcraftedHamburger.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Desserts', 'img'=>'desserts.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Main Entrees', 'img'=>'entrees.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Lunch Combos', 'img'=>'LunchCombos.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Fresh Salads', 'img'=>'salads.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Pub Diet', 'img'=>'pubDiet.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'New Handhelds', 'img'=>'handHeld.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'Kids', 'img'=>'kids.jpg', 'cat_id'=>''),
           array('type' => 'cat', 'title' => 'New Apps & Bar Snacks', 'img'=>'apps.jpg', 'cat_id'=>''),
	       array('type' => 'subcat', 'title' => 'Appetizers', 'img'=>'apps.jpg', 'cat_id'=>1),
           array('type' => 'subcat', 'title' => 'Entrees', 'img'=>'chicken_penne.jpg', 'cat_id'=>1),
           array('type' => 'subcat', 'title' => 'Alcohol', 'img'=>'wine_toast.jpg', 'cat_id'=>3),
           array('type' => 'subcat', 'title' => 'Refreshments', 'img'=>'Beers.jpg', 'cat_id'=>3),
           array('type' => 'subcat', 'title' => 'Steaks', 'img'=>'steak.jpg', 'cat_id'=>6),
           array('type' => 'subcat', 'title' => 'Ribs', 'img'=>'riblets.jpg', 'cat_id'=>6),
           array('type' => 'subcat', 'title' => 'Chicken', 'img'=>'brewhouse_chicken.jpg', 'cat_id'=>6),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('catsubcats');
    }
}
