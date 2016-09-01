<?php

use Illuminate\Database\Seeder;

class pengurusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
          'name'=>'lug',
          'email'=>'lug805@gmail.com',
          'password'=>bcrypt('lugpassword'),
          'member_id'=>'000',
          'status'=>'active',
          'created_at'=>new DateTime(),
          'updated_at'=>new DateTime(),

        ]);

    }
}
