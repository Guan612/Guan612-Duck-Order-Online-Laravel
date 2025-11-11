<?php

use App\Enums\Role;
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
        $role = array_column(Role::cases(), "value");

        Schema::create('users', function (Blueprint $table) use ($role) {
            $table->id();
            $table->string('login_id')->unique();
            $table->string('password');
            $table->string('email')->unique()->nullable();
            $table->string('nickname')->nullable();
            $table->enum('role', $role)->default(Role::user->value);
            $table->string('avatar_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
