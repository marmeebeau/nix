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

        include 'list.php';

        EventPkgServices::create([
            'service_id' => 1,
            'event_pkg_id' => 1,
            'service_price' => 20000,
            'service_name' => "Debut Full Planning & Coordination",
            'service_description' => $debutPlanningDescription
        ]);

        EventPkgServices::create([
            'service_id' => 2,
            'event_pkg_id' => 2,
            'service_price' => 15000,
            'service_name' => "On-The-Day Coordination",
            'service_description' => $onTheDayCoordinationDescription
        ]);
        EventPkgServices::create([
            'service_id' => 3,
            'event_pkg_id' => 3,
            'service_price' => 215000,
            'service_name' => "Opal Wedding Package",
            'service_description' => $opalWeddingPackage
        ]);
        EventPkgServices::create([
            'service_id' => 4,
            'event_pkg_id' => 4,
            'service_price' => 165000,
            'service_name' => "Pearl Wedding Package",
            'service_description' => $pearlWeddingPackage
        ]);
        EventPkgServices::create([
            'service_id' => 5,
            'event_pkg_id' => 5,
            'service_price' => 215000,
            'service_name' => "Topaz Wedding Package",
            'service_description' => $topazWeddingPackage
        ]);
        EventPkgServices::create([
            'service_id' => 6,
            'event_pkg_id' => 6,
            'service_price' => 299000,
            'service_name' => "Ruby Wedding Package",
            'service_description' => $rubyWeddingPackage
        ]);
        EventPkgServices::create([
            'service_id' => 7,
            'event_pkg_id' => 7,
            'service_price' => 355000,
            'service_name' => "Diamond Wedding Package",
            'service_description' => $diamondWeddingPackage
        ]);
        EventPkgServices::create([
            'service_id' => 8,
            'event_pkg_id' => 8,
            'service_price' => 15000,
            'service_name' => "Event Coordination for Birthdays",
            'service_description' => $eventCoordinationBirthdays
        ]);
        EventPkgServices::create([
            'service_id' => 9,
            'event_pkg_id' => 9,
            'service_price' => 20000,
            'service_name' => "Debut Full Planning & Coordination",
            'service_description' => $debutPlanningDescription
        ]);
        EventPkgServices::create([
            'service_id' => 10,
            'event_pkg_id' => 10,
            'service_price' => 149000,
            'service_name' => "Aries All-In Debut Package",
            'service_description' => $ariesEventPackage
        ]);
        EventPkgServices::create([
            'service_id' => 11,
            'event_pkg_id' => 11,
            'service_price' => 200000,
            'service_name' => "Gemini All-In Debut Package",
            'service_description' => $geminiEventPackage
        ]);
        EventPkgServices::create([
            'service_id' => 12,
            'event_pkg_id' => 12,
            'service_price' => 250000,
            'service_name' => "Libra All-In Debut Packages",
            'service_description' => $libraEventPackage
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
