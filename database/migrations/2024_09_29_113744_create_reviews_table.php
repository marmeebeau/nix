<?php

use App\Models\Review;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->integer('rating'); // e.g., 1 to 5 stars
            $table->text('comments')->nullable();
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('client_id');
            $table->timestamps();

            $table->foreign('package_id')->references('package_id')->on('event_packages');
            $table->foreign('booking_id')->references('booking_id')->on('booking_details');
            $table->foreign('client_id')->references('client_id')->on('clients');
        });

        Review::create([
            'review_id' => 1,
            'rating' => 5,
            'comments' => 'Excellent service',
            'package_id' => 1,
            'booking_id' => 1,
            'client_id' => 2,
        ]);

        Review::create([
            'review_id' => 2,
            'rating' => 4,
            'comments' => 'Good, but can improve',
            'package_id' => 2,
            'booking_id' => 2,
            'client_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
