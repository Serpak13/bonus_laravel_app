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
        Schema::create('organizers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->integer('status')->default(0);
            $table->integer('type');
            $table->string('inn')->nullable();
            $table->string('kpp')->nullable();
            $table->string('ogrn')->nullable();
            $table->date('ogrn_date')->nullable();
            $table->string('address')->nullable();
            $table->string('manager_position')->nullable();
            $table->string('manager_last_name')->nullable();
            $table->string('manager_first_name')->nullable();
            $table->string('manger_patronymic')->nullable();
            $table->string('city')->nullable();
            $table->string('representative_last_name')->nullable();
            $table->string('representative_first_name')->nullable();
            $table->string('representative_patronymic')->nullable();
            $table->string('representative_phone')->nullable();
            $table->string('representative_email')->nullable();
            $table->string('representative_position')->nullable();
            $table->string('name_bank')->nullable();
            $table->string('bic_bank')->nullable();
            $table->string('checking_account')->nullable();
            $table->string('correspondence_account')->nullable();
            $table->string('domain');
            $table->integer('balance')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
