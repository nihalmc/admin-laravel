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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('place');
            $table->string('state_ut');
            $table->string('phone');
            $table->timestamps();
        });

        DB::table('customers')->insert([
            [
                'name' => 'customers',
                'email' => 'modloftsofas123@gmail.com',
                'place' => 'chennai',
                'state_ut' => 'tamil nadu',
                'phone' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
