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
            $table->string('kode',25);
            $table->char('nis',25)->nullable();
            $table->string('fullname',75);
            $table->string('username',50)->unique();
            $table->string('password');
            $table->string('kelas',50)->nullable();
            $table->text('alamat')->nullable();
            $table->enum('verif',['Verified','Unverified'])->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->date('join_date');
            $table->string('foto')->nullable();
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
