<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
      {
          $admin = new User();
          $admin->name = 'admin';
          $admin->email = 'krishi@admin.com';
          $admin->password = Hash::make('admin@123');
          $admin->phone_number = '9800000000';
          $admin->role_id = 1;
          $admin->save();
      }
}
