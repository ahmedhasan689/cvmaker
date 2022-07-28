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
        Schema::create('curriculum_vitaes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('job_title');
            $table->string('birth_of_date');

            $table->string('enterprise_name');
            $table->string('enterprise_from');
            $table->string('enterprise_to');
            $table->text('enterprise_notes')->nullable();

            $table->string('experience_name');
            $table->string('experience_from');
            $table->string('experience_to');
            $table->text('experience_notes')->nullable();

            // Foreign Key For User
            $table->foreignId('user_id')->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('curriculum_vitaes');
    }
};
