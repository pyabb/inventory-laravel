<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToPaymentsSellId extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table)
        {
            $table->index('sell_id');
        });
    }

    public function down()
    {
        Schema::table('payments', function (Blueprint $table)
        {
            $table->dropIndex(['sell_id']);
        });
    }
}
