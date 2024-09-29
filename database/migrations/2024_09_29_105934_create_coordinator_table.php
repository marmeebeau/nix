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
            $table->string('coordinator_email')->unique();
            $table->string('coordinator_password');
            $table->string('coordinator_fname');
            $table->string('coordinator_lname');
            $table->date('coordinator_birthday');
            $table->string('coordinator_gender');
            $table->string('coordinator_contact');
            $table->string('coordinator_city');
            $table->timestamp('account_created')->nullable();
            $table->timestamps();
        });


        Coordinator::create([
            'coordinator_id' => 1,
            'coordinator_username' => 'nixadmin',
            'coordinator_email' => 'nixrenacia@gmail.com',
            'coordinator_password' => Hash::make('12345678'),
            'coordinator_fname' => 'Nikki',
            'coordinator_lname' => 'Renacia',
            'coordinator_birthday' => '1993-11-23',
            'coordinator_gender' => 'F',
            'coordinator_contact' => '09452671317',
            'coordinator_city' => 'Dumaguete',
            'account_created' => '2024-08-01 09:28:07',
        ]);

        Coordinator::create([
            'coordinator_id' => 2,
            'coordinator_username' => 'nixxie',
            'coordinator_email' => 'nixiedust@gmail.com',
            'coordinator_password' => Hash::make('12345678'),
            'coordinator_fname' => 'Giovani',
            'coordinator_lname' => 'Recoleta',
            'coordinator_birthday' => '1990-07-02',
            'coordinator_gender' => 'M',
            'coordinator_contact' => '09284926390',
            'coordinator_city' => 'Valencia',
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
