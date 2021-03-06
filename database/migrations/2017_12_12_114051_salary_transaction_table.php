<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalaryTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_id')->unsigned();
            $table->string('trans_date',100);
            $table->integer('amount');
            $table->string('salary_month',100);
            $table->integer('bonus');
            $table->integer('deduction');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('emp_id')->references('id')->on('employee')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary_transaction');
    }
}
