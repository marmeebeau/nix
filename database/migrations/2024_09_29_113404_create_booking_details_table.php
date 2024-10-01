<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\BookingDetail;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id('booking_id');
            $table->date('event_date')->nullable();
            $table->text('event_description')->nullable();
            $table->time('event_time')->nullable();
            $table->enum('status', ['Pending', 'Confirmed', 'Cancelled'])->default('Pending');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->unsignedBigInteger('coordinator_id')->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->foreign('package_id')->references('package_id')->on('event_packages');
            $table->foreign('coordinator_id')->references('coordinator_id')->on('coordinators');
        });


        BookingDetail::create([
            'booking_id' => 1,
            'event_date' => '2024-07-01',
            'event_description' => 'Indoor Wedding at Venue A',
            'event_time' => '14:00:00',
            'status' => 'Confirmed',
            'client_id' => 1,
            'package_id' => 1,
            'coordinator_id' => 1,
        ]);

        BookingDetail::create([
            'booking_id' => 2,
            'event_date' => '2024-07-05',
            'event_description' => 'Garden Debut at Venue B',
            'event_time' => '09:00:00',
            'status' => 'Pending',
            'client_id' => 1,
            'package_id' => 2,
            'coordinator_id' => 2,
        ]);

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_details');
    }
}
