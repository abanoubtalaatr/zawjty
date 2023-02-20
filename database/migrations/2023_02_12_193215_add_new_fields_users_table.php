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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('age_id')->nullable();
            $table->foreignId('beard_id')->nullable();
            $table->foreignId('commitment_prayer_id')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('eduction_id')->nullable();
            $table->foreignId('long_id')->nullable();
            $table->foreignId('weight_id')->nullable();
            $table->foreignId('music_id')->nullable();
            $table->foreignId('nationality_id')->nullable();
            $table->foreignId('smooking_id')->nullable();
            $table->foreignId('working_id')->nullable();
            $table->foreignId('hair_type_id')->nullable();
            $table->foreignId('financial_status_id')->nullable();
            $table->foreignId('hair_color_id')->nullable();
            $table->foreignId('annual_income_id')->nullable();
            $table->foreignId('want_married_id')->nullable();
            $table->foreignId('color_skin_id')->nullable();
            $table->foreignId('marriage_type_id')->nullable();
            $table->foreignId('health_status_id')->nullable();
            $table->foreignId('marital_status_id')->nullable();
            $table->foreignId('religiosity_id')->nullable();
            $table->foreignId('having_children_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
