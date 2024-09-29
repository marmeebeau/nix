<?php

use App\Models\Event;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('event_name');
            $table->date('event_date');
            $table->decimal('budget', 10, 2);
            $table->unsignedBigInteger('client_id');
            $table->timestamps();
            $table->foreign('client_id')->references('client_id')->on('clients');
        });

        Event::create([
            'event_id' => 1,
            'event_name' => 'Marchs Debut Party',
            'event_date' => '2024-08-20',
            'budget' => 200000,
            'client_id' => 1,
        ]);

        Event::create([
            'event_id' => 2,
            'event_name' => 'John and Janes Wedding',
            'event_date' => '2024-12-15',
            'budget' => 500000,
            'client_id' => 2,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
