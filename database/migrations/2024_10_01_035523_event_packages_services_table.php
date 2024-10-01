<?php

use App\Models\EventPkgServices;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventPackagesServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_pkg_services', function (Blueprint $table) {
            $table->id('service_id');
            $table->unsignedBigInteger('event_pkg_id');
            $table->decimal('service_price', 8, 2);
            $table->string('service_name');
            $table->text('service_description')->nullable();
            $table->timestamps();

            $table->foreign('event_pkg_id')->references('package_id')->on('event_packages')->onDelete('cascade');
        });

        EventPkgServices::create([
            'service_id' => 1,
            'event_pkg_id' => 1,
            'service_price' => 5000.00,
            'service_name' => 'Catering Service',
            'service_description' => 'Includes buffet for up to 100 guests with multiple menu options.',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_pkg_services');
    }
}
