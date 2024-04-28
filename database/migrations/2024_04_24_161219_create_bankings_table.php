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
        Schema::create('bankings', function (Blueprint $table) {
            $table->id();
            $table->string("passport_number");
            $table->date("passport_issue");
            $table->string("nid");
            $table->string("name_of_bank");
            $table->string("name_of_branch");
            $table->string("bank_account_number");
            $table->string("name_of_account");
            $table->string("bank_account_type");
            $table->string("account_belongs");
            $table->string("belongs_to");
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bankings');
    }
};
