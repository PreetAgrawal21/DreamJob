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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->ondelete('cascade');
            $table->string('job_title',50);
            $table->string('job_level', 20);
            $table->unsignedSmallInteger('vacancy_count');
            $table->string('min_salary',10);
            $table->string('max_salary',10);
            $table->string('job_location');
            $table->timestamp('deadline');
            $table->string('experince',20);
            $table->string('qualification',50)->nullable();
            $table->string('description',50);
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
        Schema::dropIfExists('jobs');
        $table->dropForeign('companies_company_id_foreign');
    }
};
