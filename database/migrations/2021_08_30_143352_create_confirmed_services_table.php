<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmedServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmed_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->bigInteger('provider_id')->unsigned();
            $table->string('CustomerName');
            $table->string('ProviderName');
            $table->string('EventType');
            $table->string('Venue');
            $table->string('Capacity');
            $table->string('EmailAddress');
            $table->string('PhoneNumber');
            $table->string('Address');
            $table->double('Amount');
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
        Schema::dropIfExists('confirmed_services');
    }
}
