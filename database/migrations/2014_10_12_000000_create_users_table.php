<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->integer('parent_id')->nullable();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('users_doc')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('token')->nullable();
            $table->string('web_address')->nullable();
            $table->string('uuid')->nullable();
            $table->string('profile_pics')->nullable();
            $table->enum('roles', ['member', 'super_admin', 'support', 'team']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
