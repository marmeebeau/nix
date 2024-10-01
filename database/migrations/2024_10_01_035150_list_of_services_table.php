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
