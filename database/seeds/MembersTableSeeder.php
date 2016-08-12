<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('members')->insert([
        'Nim'=>'15410100030',
        'Nama'=>'Audhy Virabri Kressa',
        'Tlp'=>'081232352834',
        'created_at'=>new DateTime(),
        'updated_at'=>new DateTime(),

      ]);

    }
}
