<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_applicant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('applicant_id');
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->timestamps();

            $table->foreign('book_id')->references('id')
                ->on('books')
                ->onDelete('cascade');
            $table->foreign('applicant_id')->references('id')
                ->on('applicants')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_applicant');
    }
};
