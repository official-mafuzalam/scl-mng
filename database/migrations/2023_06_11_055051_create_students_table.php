<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();
            $table->integer('user_id');
            $table->string('student_name');
            $table->string('student_nid');
            $table->string('student_email');
            $table->string('student_mobile');
            $table->string('father_name');
            $table->string('father_nid');
            $table->string('father_mobile');
            $table->string('mother_name');
            $table->string('mother_nid');
            $table->string('mother_mobile');
            $table->string('student_gender');
            $table->string('address_street');
            $table->string('address_postOffice');
            $table->string('address_upazila');
            $table->string('address_zila');
            $table->string('student_class');
            $table->integer('student_roll');
            $table->string('student_reg')->nullable();
            $table->string('password')->nullable();
            $table->string('inserter_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};