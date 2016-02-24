<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('img');
            $table->integer('cat_id');
        });
    
     DB::table('items')->insert(array(
            array ('title' => 'Mozzarella Sticks', 'img' => 'mozzeralla_sticks.jpg', 'cat_id' => '13'),
            array ('title' => 'Onion Rings', 'img' => 'onion_rings.jpg', 'cat_id' => '13'),
            array ('title' => 'Two Side Salads', 'img' => 'caesar_salad.jpg', 'cat_id' => '13'),
            array ('title' => 'Three-Cheese Chicken Penne', 'img' => 'chicken_penne.jpg', 'cat_id' => '14'),
            array ('title' => 'Chicken Tenders Basket', 'img' => 'chicken_tend.jpg', 'cat_id' => '14'),
            array ('title' => 'The American Standard', 'img' => 'allinburger.jpg', 'cat_id' => '14'),
            array('title' => 'Smarter Choice', 'img'=>'bourbon_chicken.jpg', 'cat_id'=>'2'),
            array('title' => 'Hot Shot Whiskey Chicken', 'img'=>'bourbon_chicken.jpg', 'cat_id'=>'2'),
            array('title' => 'Savory Cedar Salmon', 'img'=>'salmon.jpg', 'cat_id'=>'2'),
            array('title' => 'Shrimp Wonton Stir-Fry', 'img'=>'shrimpWonton.jpg', 'cat_id'=>'2'),
            array('title' => 'Beers', 'img'=>'Beers.jpg', 'cat_id'=>'15'),
            array('title' => 'Wines', 'img'=>'wines.jpg', 'cat_id'=>'15'),
            array('title' => 'Tea', 'img'=>'tea.jpg', 'cat_id'=>'15'),
            array ('title' => 'Lemon', 'img' => 'lemonades.jpg', 'cat_id' => '16'),
            array ('title' => 'Limeaid', 'img' => 'limeades.jpg', 'cat_id' => '16'),
            array ('title' => 'Mushroom Swiss', 'img' => 'burger_mushroomswiss.jpg', 'cat_id' => '4'),
            array ('title' => 'The American Standard', 'img' => 'burger_american.jpg', 'cat_id' => '4'),
            array ('title' => 'Triple Bacon Burger', 'img' => 'burger_triplebacon.jpg', 'cat_id' => '4'),
            array ('title' => 'Triple Chocolate Meltdown', 'img' => 'triple_choc.jpg', 'cat_id' => '5'),
            array ('title' => 'Butter Pecan Blondie', 'img' => 'maple_blondie.jpg', 'cat_id' => '5'),
            array ('title' => 'Apple Chimi-Cheesecake', 'img' => 'apple_cheesecake.jpg', 'cat_id' => '5'),
            array ('title' => '7oz Grilled Onion Sirloin with Stout Gravy', 'img' => 'grilled_onion_sirloin.jpg', 'cat_id' => '17'),
            array ('title' => '9oz House Sirloin', 'img' => 'sirloin.jpg', 'cat_id' => '17'),
            array ('title' => 'Pepper-Crusted Sirloin & Whole Grains', 'img' => 'pepper_sirloin.jpg', 'cat_id' => '17'),
            array ('title' => 'Applebees Riblets', 'img' => 'riblets.jpg', 'cat_id' => '18'),
            array ('title' => 'Double-Glazed Baby Back Ribs', 'img' => 'ribs.jpg', 'cat_id' => '18'),
            array ('title' => 'Crispy Chicken Brewhouse', 'img' => 'brewhouse_chicken.jpg', 'cat_id' => '19'),
            array ('title' => 'Burbon Street Chicken & Shrimp', 'img' => 'bourbon_chicken.jpg', 'cat_id' => '19'),
            array ('title' => 'Chicken Tenders Platter', 'img' => 'chicken_tenders.jpg', 'cat_id' => '19'),
            array ('title' => 'Tomato Basil-Soup', 'img' => 'salmon.jpg', 'cat_id' => '7'),
            array ('title' => 'House Salad', 'img' => 'oriental_salad.jpg', 'cat_id' => '7'),
            array ('title' => 'Shrimp-Scampi', 'img' => 'shrimp.jpg', 'cat_id' => '7'),
            array ('title' => 'Thai Shrimp', 'img' => 'ThaiShrimp.jpg', 'cat_id' => '8'),
            array ('title' => 'Fiesta-Chicken', 'img'=> 'FiestaChicken.jpg', 'cat_id' => '8'),
            array ('title' => 'Ceasar Salad', 'img' => 'ChickenCeasar.jpg', 'cat_id' => '8'),
            array ('title' => 'Shrimp-Wonton', 'img' => 'ShrimpWonton.jpg', 'cat_id' => '9'),
            array ('title' => 'Sirloin-Stout', 'img' => 'SirloinStout.jpg', 'cat_id' => '9'),
            array ('title' => 'Cedar Grilled Lemon Chicken', 'img' => 'CedarChicken.jpg', 'cat_id' => '9'),
            array ('title' => 'Triple-Hog-Dare', 'img' => 'triple_hog_dare_ya.jpg', 'cat_id' => '10'),
            array ('title' => 'Kickin Turkey Stacker', 'img' => 'turkey_stacker.jpg', 'cat_id' => '10'),
            array ('title' => 'American BLT', 'img' => 'blt.jpg', 'cat_id' => '10'),
            array ('title' => 'Kid1', 'img' => 'smores.jpg', 'cat_id' => '11'),
            array ('title' => 'Kid2', 'img' => 'pepper_crusted_sirloin.jpg', 'cat_id' => '11'),
            array ('title' => 'Kid3', 'img' => 'lemon_chicken.jpg', 'cat_id' => '11'),
            array ('title' => 'Shrimp', 'img' => 'lemon_chicken.jpg', 'cat_id' => '12'),
            array ('title' => 'Meatballs', 'img' => 'lemon_chicken.jpg', 'cat_id' => '12'),
            array ('title' => 'Smores', 'img' => 'smores.jpg', 'cat_id' => '12')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
