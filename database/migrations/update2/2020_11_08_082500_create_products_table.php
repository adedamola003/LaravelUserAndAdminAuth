<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('price',12,2);
            $table->integer('status')->default(1)->comment('0=Out of Stock,1=Available');
            $table->timestamps();
        });

        DB::table('products')->insert([
	            ['id' => '1',
                'name' => 'Bread',
                'price' => '3.45',
                'status' => '1',
                'created_at' => now(),
                 'updated_at' => now(),],
                ['id' => '2',
                'name' => 'Croissant',
                'price' => '3.60',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now()],
                ['id' => '3',
                'name' => 'Doughnut',
                'price' => '1.60',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now()],
	        ]
	    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
