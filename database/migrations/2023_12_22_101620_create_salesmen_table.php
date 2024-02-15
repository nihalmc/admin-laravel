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
        Schema::create('salesmen', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->boolean('isSalesmans')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('salesmen')->insert([
            [
                'name' => 'salesman',
                'username' => 'salesman',
                'email' => 'modloftsofas123@gmail.com',
                'phone'=> '1234567890',
                'password' => bcrypt('modl@salesman#oft'),
                'isSalesmans' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesman');
    }
};
