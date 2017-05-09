<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('groups')->truncate();
        $group = [
          ['id'=>1, 'name'=>'family','created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
          ['id'=>2, 'name'=>'friend','created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
          ['id'=>3, 'name'=>'client','created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
        ];
        DB::table('groups')->insert($group);
    }
}
