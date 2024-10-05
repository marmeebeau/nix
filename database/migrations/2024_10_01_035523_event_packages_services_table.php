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

        $debutPlanningDescription = <<<EOT
        Inclusions:\n
        Event Planning\n
        Discounted Rates of Event Supplies\n
        Monthly Meetings & Consultations\n
        On the Day Coordination\n
        (Dress-Up, Ceremony, & Reception)\n
        3-4 ON THE DAY COORDINATORS\n

        Notes:\n
        Meals are not included. Client should provide meals for the coordinators.\n
        50% Down Payment must be made upon first meet-up to secure date.\n
        Payment through Cash / GCash / Bank Transfer are accepted.\n
        50% of the remaining balance should be paid on the day of the event.\n
        Down Payments are non-refundable.\n
        Contract is provided.\n
        EOT;

        $pearlWeddingDescription = <<<EOT
        Inclusions:\n
        Full Planning and Coordination\n
        Catering Services\n
        Special Chairs for VIP Tables\n
        Event Styling (Ceremony & Reception)\n
        Fresh Flowers\n
        Bridal Bouquet\n
        Entourage Bouquets\n
        Groom Boutonniere\n
        Entourage Boutonnieres\n
        Bouquet for Mothers\n
        Lights & Sounds\n
        LED Wall\n
        Bridal Hair & Make-up\n
        1 Lechon\n
        Bridal Car\n
        1 Van\n
        Wedding Host\n
        2 Tier Wedding Cake (Soft Icing)\n
        1 Wine\n
        30 pcs wedding invitations\n
        50 pcs supplier meals\n
        Photo booth (Magnetic)\n
        Special Grooming by a Groomer\n
        Prenuptial Photo Shoot\n
        AVP of Prenup Photos\n
        On the Day Photo and Video Coverage\n
        Drone Shots\n
        Cinematic Wedding Video Highlights (SDE)\n
        Pica-Pica\n
        EOT;

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
            'service_price' => 165000,
            'service_name' => "Pearl Wedding Package",
            'service_description' => $pearlWeddingDescription
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
