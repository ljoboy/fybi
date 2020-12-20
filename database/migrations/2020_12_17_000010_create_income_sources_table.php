<?php
/**
 * FILE 2020_12_17_000010_create_income_sources_table.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 10:21 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeSourcesTable extends Migration
{
    public function up()
    {
        Schema::create('income_sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->float('fee_percent', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
