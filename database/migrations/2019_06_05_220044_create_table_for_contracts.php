<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForContracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('owner')->nullable();
            $table->string('country')->nullable();
            $table->string('legal_description')->nullable();
            $table->string('deposit')->nullable();
            $table->string('today_day')->nullable();
            $table->string('buyer_address')->nullable();
            $table->string('broker')->nullable();
            $table->string('agent_phone')->nullable();
            $table->string('check_amount')->nullable();
            $table->string('personal_property')->nullable();
            $table->string('rate')->nullable();
            $table->string('term')->nullable();
            $table->string('escrow_offer')->nullable();
            $table->string('inspection_period')->nullable();
            $table->string('sales_agent_name')->nullable();
            $table->string('sales_agent_email')->nullable();
            $table->string('address')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('closing_day')->nullable();
            $table->string('sign')->nullable();
            $table->string('agent')->nullable();
            $table->string('agent_email')->nullable();
            $table->string('escrow_check_comment')->nullable();
            $table->string('financing')->nullable();
            $table->string('finance_type')->nullable();
            $table->string('assignability')->nullable();
            $table->string('selling_brokerage')->nullable();
            $table->string('sales_agent_phone')->nullable();
            $table->string('contact')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_fax')->nullable();
            $table->string('backups')->nullable();
            //$table->string('inspection_period')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
