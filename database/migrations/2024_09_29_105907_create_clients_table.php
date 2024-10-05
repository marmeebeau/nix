<?php

use App\Models\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('client_username')->nullable();
            $table->string('client_fname')->nullable();
            $table->string('client_lname')->nullable();
            $table->string('client_phonenum')->nullable();
            $table->string('client_email')->unique();
            $table->timestamps();
        });

        Client::create([
            'client_id' => 2,
            'client_username' => 'doejane',
            'client_fname' => 'Jane',
            'client_lname' => 'Doe',
            'client_phonenum' => '09122345681',
            'client_email' => 'janedoe@gmail.com',
        ]);


        Client::create([
            'client_id' => 1,
            'client_username' => 'marc',
            'client_fname' => 'Marco',
            'client_lname' => 'Polo',
            'client_phonenum' => '09257845621',
            'client_email' => 'marcopolo@gmail.com',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
