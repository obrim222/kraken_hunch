<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptohunchDatabaseInstall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::enableForeignKeyConstraints();


        //static table - populate manually
        Schema::create('payment_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 15);
        });

        //dynamic table - populates on registration
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 100);
            $table->string('password', 250);
            $table->integer('is_admin')->nullable();
        });

        //dynamic table - populates on account top up
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('balance');

            $table->integer('payment_type_id')->unsigned();
            $table->index('payment_type_id');
            $table->foreign('payment_type_id')->references('id')->on('payment_type');
        });

        //static table - populate manually

        Schema::create('coin_data', function (Blueprint $table) {
            $table->increments('id')->nullable();;
            $table->string('symbol', 20);
            $table->string('name', 20);


            $table->string('poster', 500);
            $table->string('description', 2000);

            $table->string('coin_category', 200);
            $table->integer('total_supply');

            $table->string('algorithm', 200);
            $table->string('founder', 200);
            $table->string('cofounder', 200);
            $table->integer('transactions_per_second');
            $table->integer('blocktime');
            $table->integer('transactions_fees');
        });


        //dynamic table - populates when adds, edits or deletes a blog
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog', 5000);

            $table->integer('coin_id')->unsigned();
            $table->index('coin_id');
            $table->foreign('coin_id')->references('id')->on('coin_data');
            $table->date('date');
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('membership_stake');
            $table->integer('tip_stake');
            $table->integer('tip_percentage_stake');
            $table->integer('penalty_multiplier');
            $table->integer('reward_multiplier');
        });

        //dynamic table - populates from api scripts
        Schema::create('historical_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('currency1', 6);
            $table->date('date');
            $table->integer('currency1_price');
            $table->string('currency2', 6);
            $table->integer('currency2_price');
            $table->integer('coin_id')->unsigned();
            $table->index('coin_id');
            $table->foreign('coin_id')->references('id')->on('coin_data');
        });


        Schema::create('tips', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tip_direction', ['up', 'down']);
            $table->enum('tip_currency', ['eur', 'hunch']);
            $table->timestamps();
            $table->integer('price_at_time_of_tip');
            $table->date('date_now');
            $table->date('date_end');
            $table->enum('reason_up', ['major_roadmap_releases_success', 'stock_market_up', 'influencers_backing_the_project', 'money_printing', 'instinct_of_the_expert_up'])->nullable();
            $table->enum('reason_down', ['major_roadmap_releases_failure', 'stock_market_down', 'influencers_slating_the_project', 'instinct_of_the_expert_down', 'FUD'])->nullable();
            $table->string('reason_description', 1000)->nullable();
            $table->integer('calculated_tip_price');
            $table->enum('tip_percentage', [30, 40, 50]);
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('coin_id')->unsigned();
            $table->index('coin_id')->nullable();
            $table->foreign('coin_id')->references('id')->on('coin_data')->nullable();
            $table->string('winlose_flag', 1)->nullable();

        });

        Schema::create('transactions', function (Blueprint $table) {

            $table->increments('id');
            $table->date('date');
            $table->string('description', 200);
            $table->string('currency1', 6);
            $table->integer('amount1');
            $table->string('currency2', 6);
            $table->integer('amount2');
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->enum('type', ['stake_membership', 'stake_collateral', 'reward', 'penalise', 'topup', 'withdraw']);
        });


        Schema::create('treasury', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hunch_reserve_pool');
            $table->integer('hunch_staked_pool');
            $table->integer('eur_balance');
            $table->date('date');
        });

        Schema::create('wallet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('payment_type_id')->unsigned();
            $table->index('payment_type_id');
            $table->foreign('payment_type_id')->references('id')->on('payment_type');
            $table->integer('card_number');
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cryptohunch_database_install');
    }
}
