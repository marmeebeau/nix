<?php

use App\Models\ListOfServices;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListOfServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_of_services', function (Blueprint $table) {
            $table->id('list_of_service_id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('event_pkg_id');
            $table->timestamps();

            $table->foreign('package_id')->references('package_id')->on('event_packages')->onDelete('cascade');
            $table->foreign('event_pkg_id')->references('package_id')->on('event_packages')->onDelete('cascade');
        });

        ListOfServices::create([
            'list_of_service_id' => 1,
            'package_id' => 1,
            'event_pkg_id' => 1,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 2,
            'package_id' => 2,
            'event_pkg_id' => 2,
        ]);
        ListOfServices::create([
            'list_of_service_id' => 3,
            'package_id' => 3,
            'event_pkg_id' => 3,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 4,
            'package_id' => 4,
            'event_pkg_id' => 4,
        ]);
        ListOfServices::create([
            'list_of_service_id' => 5,
            'package_id' => 5,
            'event_pkg_id' => 5,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 6,
            'package_id' => 6,
            'event_pkg_id' => 6,
        ]);
        ListOfServices::create([
            'list_of_service_id' => 7,
            'package_id' => 7,
            'event_pkg_id' => 7,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 8,
            'package_id' => 8,
            'event_pkg_id' => 8,
        ]);
        ListOfServices::create([
            'list_of_service_id' => 9,
            'package_id' => 9,
            'event_pkg_id' => 9,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 10,
            'package_id' => 10,
            'event_pkg_id' => 10,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 11,
            'package_id' => 11,
            'event_pkg_id' => 11,
        ]);

        ListOfServices::create([
            'list_of_service_id' => 12,
            'package_id' => 12,
            'event_pkg_id' => 12,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_of_services');
    }
}
