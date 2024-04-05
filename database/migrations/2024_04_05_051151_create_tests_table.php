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
        // testテーブルに追加
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名前');
            $table->string('email')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
