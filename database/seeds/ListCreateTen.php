<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ListCreateTen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (range(1,10) as $item){
            DB::table('todoinfo')->insert([
                'item' => 'item123'.$item,
                'start_date' => Carbon::today(),
                'end_date' => Carbon::tomorrow(),
                'finish'=>false,
            ]);
        }
    }
}
