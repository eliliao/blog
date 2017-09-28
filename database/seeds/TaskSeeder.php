<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 0;$i < 50; $i++){
			Task::create([
				'name' => '洗衣服',
	    		'description' => '洗乾淨一點',
	    		'is_completed' => 0
	    	]);
		}
	}
}
