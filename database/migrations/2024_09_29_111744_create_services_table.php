<?php
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id('service_id');
            $table->string('inclusion');
            $table->integer('quantity');
            $table->unsignedBigInteger('package_id');
            $table->timestamps();
            $table->foreign('package_id')->references('package_id')->on('event_packages')->onDelete('cascade');
        });

        Service::create([
            'service_id' => 1,
            'inclusion' => 'Full Planning & Coordination',
            'quantity' => 1,
            'package_id' => 1,
        ]);

        Service::create([
            'service_id' => 2,
            'inclusion' => 'Catering Services',
            'quantity' => 1,
            'package_id' => 1,
        ]);

        Service::create([
            'service_id' => 3,
            'inclusion' => 'Wine',
            'quantity' => 1,
            'package_id' => 1,
        ]);

        Service::create([
            'service_id' => 4,
            'inclusion' => 'Supplier Meals',
            'quantity' => 30,
            'package_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
