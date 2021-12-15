<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->id();

            $table->enum('tip_direction', ['up', 'down']);
            $table->enum('tip_currency',['eur', 'hunch']);
           
            $table->timestamps();
            
            $table->integer('price_at_time_of_tip');
            
            

            $table->date('date_now');
            $table->date('date_end');

            $table->enum('reason_up', ['major_roadmap_releases_success', 'stock_market_up', 'influencers_backing_the_project', 'money_printing', 'instinct_of_the_expert_up'])->nullable();
            $table->enum('reason_down', ['major_roadmap_releases_failure', 'stock_market_down', 'influencers_slating_the_project', 'instinct_of_the_expert_down', 'FUD'])->nullable();

            $table->string('reason_description', 1000);
            $table->integer('calculated_tip_price')->nullable();

            $table->enum('tip_percentage',[30, 40, 50]);


            $table->integer('coin_id')->unsigned();
            $table->index('coin_id')->nullable();
            $table->foreign('coin_id')->references('id')->on('coin_data')->nullable();

            
            

        
            
           
            //$table->integer('user_id')->unsigned()->nullable();
            //$table->index('user_id')->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->nullable();


            //$table->string('win_lose_flag',1)->nullable();
            //$table->string('win_lose_flag',1)->nullable();


            //$table->string('versus_currency', 6)->nullable();
            //$table->integer('versus_exchange_rate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips');
    }
}
