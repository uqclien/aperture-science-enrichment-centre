<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->uuid('uid')->primary()->default(DB::raw('(UUID())'));
            $table->string('username');
            $table->string('password');
            $table->integer('test_chamber')->nullable();
            $table->integer('total_score')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->boolean('is_alive')->default(true);
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->string('api_token')->nullable();

            $table->timestamps();
        });
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
