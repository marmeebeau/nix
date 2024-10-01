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
            $table->integer('package_guest');
            $table->decimal('package_price', 8, 2);
            $table->string('package_name');
            $table->string('package_type');
            $table->text('package_description')->nullable();
            $table->string('package_image')->nullable();
            $table->timestamps();
        });

        EventPackage::create([
            'package_id' => 1,
            'package_guest' => 100,
            'package_price' => 120000.00,
            'package_name' => 'Silver Wedding Package',
            'package_type' => 'Wedding',
            'package_description' => 'Perfect package for small weddings with up to 100 guests.',
            'package_image' => 'silver_package.jpg',
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
