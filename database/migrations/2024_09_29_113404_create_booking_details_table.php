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
            $table->string('category');
            $table->string('location');
            $table->date('event_date');
            $table->time('event_time');
            $table->text('notes')->nullable();
            $table->string('status'); // e.g., 'Pending', 'Confirmed', 'Cancelled'
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('coordinator_id');
            $table->timestamps();

            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->foreign('package_id')->references('package_id')->on('event_packages');
            $table->foreign('coordinator_id')->references('coordinator_id')->on('coordinators');
        });

        BookingDetail::create([
            'booking_id' => 1,
            'category' => 'Wedding',
            'location' => 'Venue A',
            'event_date' => '2024-07-01',
            'event_time' => '14:00:00',
            'notes' => 'Indoor Wedding',
            'status' => 'confirmed',
            'client_id' => 2,
            'package_id' => 1,
            'coordinator_id' => 1,
        ]);

        BookingDetail::create([
            'booking_id' => 2,
            'category' => 'Debut',
            'location' => 'Venue B',
            'event_date' => '2024-07-05',
            'event_time' => '09:00:00',
            'notes' => 'Garden',
            'status' => 'pending',
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
