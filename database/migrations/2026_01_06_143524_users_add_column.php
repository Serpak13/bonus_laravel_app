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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->foreignUuid('organizer_id')->nullable()->constrained('organizers')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('patronymic')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('type')->default(2);
            $table->tinyInteger('gender')->default(0);
            $table->tinyInteger('type_registration')->default(0);
            $table->date('birth_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('organizer_id');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('patronymic');
            $table->dropColumn('status');
            $table->dropColumn('type');
            $table->dropColumn('gender');
            $table->dropColumn('type_registration');
            $table->dropColumn('birth_date');
        });
    }
};
