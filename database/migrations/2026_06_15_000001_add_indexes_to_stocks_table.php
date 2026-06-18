<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexesToStocksTable extends Migration
{
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table)
        {
            $table->index('category_id');
            $table->index('product_id');
            $table->index('vendor_id');
            $table->index('stock_quantity');
        });
    }

    public function down()
    {
        Schema::table('stocks', function (Blueprint $table)
        {
            $table->dropIndex(['category_id']);
            $table->dropIndex(['product_id']);
            $table->dropIndex(['vendor_id']);
            $table->dropIndex(['stock_quantity']);
        });
    }
}
