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
        Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->string('name');//氏名
            $table->text('address')->nullable();//住所
            $table->string('category')->nullable();//問い合わせカテゴリ
            $table->text('query');//問い合わせ内容
            $table->string('tel')->nullable();//電話番号
            $table->string('email')->nullable();//メール
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info');
    }
};
