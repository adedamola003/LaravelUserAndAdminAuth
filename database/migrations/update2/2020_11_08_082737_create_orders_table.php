<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->IDENTITY(9856, 1);
            $table->bigInteger('user_id')->index();
            $table->json('details');
            $table->double('amount',12,2);
            $table->timeStamp('order_date');
            $table->integer('status')->default(0)->comment('0=pending,1=approved,2=cancelled');
            $table->bigInteger('approved_by')->nullable()->index();
            $table->timeStamp('approved_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
