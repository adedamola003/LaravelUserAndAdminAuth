<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompliantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->index();
            $table->string('type')->unique();
            $table->integer('status')->default(0)->comment('0=Pending,1=Resolved');
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
        Schema::dropIfExists('compliants');
    }
}
