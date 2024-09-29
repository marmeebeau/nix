<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\EventPreference;

class CreateEventPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_preferences', function (Blueprint $table) {
            $table->id('preferences_id');
            $table->string('event_type');
            $table->string('theme')->nullable();
            $table->string('budget_range');
            $table->integer('guest_count');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('event_id')->nullable();
            $table->timestamps();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->foreign('event_id')->references('event_id')->on('events');
        });

        EventPreference::create([
            'preferences_id' => 1,
            'event_type' => 'Wedding',
            'theme' => 'Rustic',
            'budget_range' => '500000-700000',
            'guest_count' => 100,
            'client_id' => 2,
            'event_id' => 1,
        ]);

        EventPreference::create([
            'preferences_id' => 2,
            'event_type' => 'Debut',
            'theme' => 'Nature',
            'budget_range' => '150000-250000',
            'guest_count' => 100,
            'client_id' => 1,
            'event_id' => 2,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_preferences');
    }
}
