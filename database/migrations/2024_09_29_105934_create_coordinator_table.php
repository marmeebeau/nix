<?php

use App\Models\Coordinator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Hash;

class CreateCoordinatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinators', function (Blueprint $table) {
            $table->id('coordinator_id');
            $table->string('coordinator_username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('coordinator_fname');
            $table->string('coordinator_lname');
            $table->string('coordinator_contactnumber');
            $table->string('coordinator_city');
            $table->string('profile_image')->nullable();
            $table->timestamp('account_created')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


        Coordinator::create([
            'coordinator_id' => 1,
            'coordinator_username' => 'nixadmin',
            'email' => 'nixrenacia@gmail.com',
            'password' => Hash::make('12345678'),
            'coordinator_fname' => 'Nikki',
            'coordinator_lname' => 'Renacia',
            'coordinator_contactnumber' => '09452671317',
            'coordinator_city' => 'Dumaguete',
            'profile_image' => 'assets/images/uploads/cat_one.jpg',
            'account_created' => '2024-08-01 09:28:07',
        ]);

        Coordinator::create([
            'coordinator_id' => 2,
            'coordinator_username' => 'nixxie',
            'email' => 'nixiedust@gmail.com',
            'password' => Hash::make('12345678'),
            'coordinator_fname' => 'Giovani',
            'coordinator_lname' => 'Recoleta',
            'coordinator_contactnumber' => '09284926390',
            'coordinator_city' => 'Valencia',
            'profile_image' => 'assets/images/uploads/cat_two.jpg',
            'account_created' => '2024-01-07 02:49:04',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinator');
    }
}
