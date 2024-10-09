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
            $table->string('package_guest')->nullable();
            $table->string('package_name')->nullable();
            $table->string('package_type')->nullable();
            $table->text('package_description')->nullable();
            $table->string('package_image')->nullable();
            $table->timestamps();
        });

        include 'list.php';

        EventPackage::create([
            'package_id' => 1,
            'package_image' => 'assets/images/services/debut_full_planning_coord.png',
            'package_description' => $debutPlanningDescription,
            'package_type' => 'Wedding Planning Services',
            'package_name' => 'Full & Coordination Package',
            'package_guest' => "500",
        ]);

        EventPackage::create([
            'package_id' => 2,
            'package_image' => 'assets/images/services/on_the_day_coordination.png',
            'package_description' => $onTheDayCoordinationDescription,
            'package_type' => 'Wedding Planning Services',
            'package_name' => 'On-The-Day Coordination',
            'package_guest' => "",
        ]);

        EventPackage::create([
            'package_id' => 3,
            'package_image' => 'assets/images/event-packages/opal.jpg',
            'package_description' => $opalWeddingPackage,
            'package_type' => 'All in Wedding Packages',
            'package_name' => 'Opal Wedding Package',
            'package_guest' => "100",
        ]);

        EventPackage::create([
            'package_id' => 4,
            'package_image' => 'assets/images/event-packages/pearl.jpg',
            'package_description' => $pearlWeddingPackage,
            'package_type' => 'All in Wedding Packages',
            'package_name' => 'Pearl Wedding Package',
            'package_guest' => "500",
        ]);

        EventPackage::create([
            'package_id' => 5,
            'package_image' => 'assets/images/event-packages/topaz.jpg',
            'package_description' => $topazWeddingPackage,
            'package_type' => 'All in Wedding Packages',
            'package_name' => 'Topaz Wedding Package',
            'package_guest' => "120",
        ]);

        EventPackage::create([
            'package_id' => 6,
            'package_image' => 'assets/images/event-packages/ruby.jpg',
            'package_description' => $rubyWeddingPackage,
            'package_type' => 'All in Wedding Packages',
            'package_name' => 'Ruby Wedding Package',
            'package_guest' => "105",
        ]);

        EventPackage::create([
            'package_id' => 7,
            'package_image' => 'assets/images/event-packages/diamond.jpg',
            'package_description' => $diamondWeddingPackage,
            'package_type' => 'All in Wedding Packages',
            'package_name' => 'Diamond Wedding Package',
            'package_guest' => "200",
        ]);

        EventPackage::create([
            'package_id' => 8,
            'package_image' => 'assets/images/event-packages/diamond.jpg',
            'package_description' => $eventCoordinationBirthdays,
            'package_type' => 'Other Event Coordination for Birthdays',
            'package_name' => 'Event Coordination for Birthdays',
            'package_guest' => "",
        ]);
attributes:
        EventPackage::create([
            'package_id' => 9,
            'package_image' => 'assets/images/services/debut_full_planning_coord.png',
            'package_description' => $debutPlanningDescription ,
            'package_type' => 'Debut Planning Services',
            'package_name' => 'Debut Full Planning & Coordination',
            'package_guest' => "",
        ]);

        EventPackage::create([
            'package_id' => 10,
            'package_image' => 'assets/images/event-packages/aries.jpg',
            'package_description' => $ariesEventPackage,
            'package_type' => 'Debut Planning Services',
            'package_name' => 'Aries All-In Debut Package',
            'package_guest' => "100",
        ]);

        EventPackage::create([
            'package_id' => 11,
            'package_image' => 'assets/images/event-packages/gemini.jpg',
            'package_description' => $geminiEventPackage,
            'package_type' => 'Debut Planning Services',
            'package_name' => 'Gemini All-In Debut Package',
            'package_guest' => "100",
        ]);

        EventPackage::create([
            'package_id' => 12,
            'package_image' => 'assets/images/event-packages/ruby.jpg',
            'package_description' => $libraEventPackage,
            'package_type' => 'Debut Planning Services',
            'package_name' => 'Libra All-In Debut Packages',
            'package_guest' => "",
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
