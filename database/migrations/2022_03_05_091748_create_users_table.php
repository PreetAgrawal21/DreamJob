<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name',50);
            $table->string('lname',50);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('contact_no',11)->nullable();
            $table->string('address',50)->nullable();
            $table->string('city',20)->nullable();
            $table->string('state',20)->nullable();
            $table->string('qualification',50)->nullable();
            $table->string('stream',20)->nullable();
            $table->string('age',10)->nullable();
            $table->date('dob',20)->nullable();
            $table->string('about_me',50)->nullable();
            $table->string('resume',125)->nullable();
            $table->string('skills',50)->nullable();
            $table->rememberToken();
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
};
