<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 30; $i++) {
            DB::table('tasks')->insert([
                'status' => 'stat:' . $i,
                'content' => 'test content ' . $i,
                'user_id' => '1',
            ]);
        }
    }
}
