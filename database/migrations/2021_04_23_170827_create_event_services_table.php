<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_services', function (Blueprint $table) {
            $table->id()->nullable();
            $table->bigInteger('customer_id');
            $table->bigInteger('provider_id'); 
            $table->bigInteger('event_id')->nullable();
            $table->bigInteger('service_id');
            $table->string('service_name');
            $table->string('capacity');

            $table->string('pricerange');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_services');
    }
}
