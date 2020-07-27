<?php

use App\CodegymGroup;
use Illuminate\Database\Seeder;

class CodegymGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group1 = new CodegymGroup();
        $group1->name = "C420h1";
        $group1->description = "C4 tu luyen 300 nam gg";
        $group1->save();

        $group1 = new CodegymGroup();
        $group1->name = "C520h1";
        $group1->description = "C5 tu ngu binh nui";
        $group1->save();
    }
}
