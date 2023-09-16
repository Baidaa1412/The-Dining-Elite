<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('user_id'); // إضافة حقل user_id كمفتاح خارجي
        $table->string('name');
        $table->string('email');
        $table->integer('phone'); // لاحظ أنه تم تصحيح Integer إلى integer
        $table->datetime('res_date')->default(now());
        $table->integer('guest_number');
        $table->string('restaurant');
        $table->string('message');
        $table->softDeletes();
        $table->timestamps();

        // إضافة مفتاح خارجي يرتبط بجدول المستخدمين
        $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
