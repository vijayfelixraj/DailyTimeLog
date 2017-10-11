<?php
/*
------------------------------------------------------------------------------------------------
Project         : Daily Time Log
Created By      : Vijay Felix Raj C
Created Date    : 02.09.2017
Purpose         : To insert the User details in Users table
------------------------------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AlterUsersTableInsertValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            if (Schema::hasTable('users')) {
                Schema::table('users', function(Blueprint $table) {
                    $table->enum('user_role', ['Administrator', 'User'])->default('User');
                    $table->softDeletes();
                });
             }
        } catch (Exception $e) {}
        $this->seed();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

    /**
     * To insert the User Details
     */
    public function seed()
    {
        $save = array();
        $save['name'] = 'Loganathan';
        $save['email'] = 'logu@gmail.com';
        $save['password'] = bcrypt('admin123');
        $save['user_role'] ='Administrator';
        User::create($save);
    }
}
