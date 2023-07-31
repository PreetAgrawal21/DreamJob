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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->ondelete('cascade');
            $table->unsignedBigInteger('company_category_id');
            $table->foreign('company_category_id')->references('id')->on('company_category')->onUpdate('cascade')->ondelete('cascade');
            $table->string('logo');
            $table->string('title',50);
            $table->string('decription');
            $table->string('website');
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
        Schema::dropIfExists('companies');
        $table->dropForeign('users_user_id_foreign');
        $table->dropForeign('company_category_company_category_id_foreign');
    }
};

