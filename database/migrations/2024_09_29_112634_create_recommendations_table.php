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
            $table->id('reco_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('preferences_id');
            $table->unsignedBigInteger('package_id');
            $table->timestamps();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->foreign('preferences_id')->references('preferences_id')->on('event_preferences');
            $table->foreign('package_id')->references('package_id')->on('event_packages');
        });

        Recommendation::create([
            'reco_id' => 1,
            'client_id' => 2,
            'preferences_id' => 1,
            'package_id' => 1,
        ]);

        Recommendation::create([
            'reco_id' => 2,
            'client_id' => 1,
            'preferences_id' => 2,
            'package_id' => 2,
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
