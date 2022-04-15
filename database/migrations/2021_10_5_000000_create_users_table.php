<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('role',['admin', 'guest']);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->name = "Kevin Vink";
        $user->email = "kevinvink2002@gmail.com";
        $user->role = 'admin';
        $user->password = Hash::make("9282P15N08*");
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
