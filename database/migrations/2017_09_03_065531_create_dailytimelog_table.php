<?php
/*
------------------------------------------------------------------------------------------------
Project         : Daily Time Log
Created By      : Vijay Felix Raj C
Created Date    : 02.09.2017
Purpose         : To create Daily Time Log table
------------------------------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailytimelogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dailytimelog', function (Blueprint $table) {
            $table->increments('id');
            $table->date('schedule_on');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('project_name', 50);
            $table->mediumtext('task')->nullable();
            $table->time('billable_hrs')->default(0);
            $table->time('scheduled_hrs')->nullable();
            $table->time('hrs_spent')->default(0);
            $table->mediumtext('remarks')->nullable();
            $table->enum('status', ['Completed', 'In Progress', 'Pending', 'Not Completed', 'Postponed'])->default('Completed');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('dailytimelog');
    }
}
