<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Recommendation;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id('client_event_prefer_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('preference_id');
            $table->unsignedBigInteger('package_id');
            $table->string('additional_note');
            $table->timestamps();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->foreign('preference_id')->references('preference_id')->on('event_preferences');
            $table->foreign('package_id')->references('package_id')->on('event_packages');
        });

        Recommendation::create([
            'client_event_prefer_id' => 1,
            'additional_note' => "This a recommendation.",
            'client_id' => 2,
            'preference_id' => 1,
            'package_id' => 1,
        ]);

        Recommendation::create([
            'client_event_prefer_id' => 2,
            'additional_note' => "This a recommendation.",
            'client_id' => 1,
            'preference_id' => 1,
            'package_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommendations');
    }
}
