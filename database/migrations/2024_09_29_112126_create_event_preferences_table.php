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
            $table->id('preference_id');
            $table->string('event_type');
            $table->integer('guest_count');
            $table->string('budget_range');
            $table->string('theme');
            $table->unsignedBigInteger('client_id');
            $table->timestamps();

            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');
        });

        EventPreference::create([
            'preference_id' => 1,
            'event_type' => 'Wedding',
            'guest_count' => 150,
            'budget_range' => '50000-100000',
            'theme' => 'Rustic Bohemian',
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
        Schema::dropIfExists('event_preferences');
    }
}
