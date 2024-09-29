<?php

use App\Models\EventPackage;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_packages', function (Blueprint $table) {
            $table->id('package_id');
            $table->string('package_name');
            $table->string('package_type');
            $table->text('description');
            $table->string('photo');
            $table->decimal('price', 10, 2);
            // $table->integer('guest');
            $table->unsignedBigInteger('event_id');
            $table->timestamps();
            $table->foreign('event_id')->references('event_id')->on('events');
        });

        EventPackage::create([
            'package_id' => 1,
            'package_name' => 'Pearl Wedding',
            'package_type' => 'All-in Wedding Package',
            'description' => 'Best for 50 Guests…',
            'photo' => 'image.jpg',
            'price' => 165000,
            // 'guest' => 50,
            'event_id' => 1,
        ]);

        EventPackage::create([
            'package_id' => 2,
            'package_name' => 'Libra Debut',
            'package_type' => 'All-in Debut Package',
            'description' => 'Best for 100 Guests…',
            'photo' => 'image.jpeg',
            'price' => 215000,
            // 'guest' => 100,
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
        Schema::dropIfExists('event_packages');
    }
}
