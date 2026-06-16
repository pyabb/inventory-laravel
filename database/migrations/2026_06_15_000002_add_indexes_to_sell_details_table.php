<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexesToSellDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('sell_details', function (Blueprint $table)
        {
            $table->index('stock_id');
            $table->index('sell_id');
            $table->index('product_id');
            $table->index('category_id');
            $table->index('vendor_id');
            $table->index('user_id');
            $table->index('selling_date');
        });
    }

    public function down()
    {
        Schema::table('sell_details', function (Blueprint $table)
        {
            $table->dropIndex(['stock_id']);
            $table->dropIndex(['sell_id']);
            $table->dropIndex(['product_id']);
            $table->dropIndex(['category_id']);
            $table->dropIndex(['vendor_id']);
            $table->dropIndex(['user_id']);
            $table->dropIndex(['selling_date']);
        });
    }
}
