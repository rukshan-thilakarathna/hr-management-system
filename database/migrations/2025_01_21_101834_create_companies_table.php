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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone1')->unique();
            $table->string('phone2')->unique();
            $table->string('address');
            $table->string('logo');
            $table->string('website');
            $table->string('description');
            $table->string('fax');
            $table->string('tax_number');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
