<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker =Faker::create();
        for($i=1;$i<=100;$i++){
        $group = new Group();
        $group -> group_name = $faker->group_name;
        $group -> code = randomString(8);
        $group -> user_id = session('user_id');
        $group->save();
        $group_id = $group-> group_id;
        $member = new Member();
        $member -> group_id = $group_id;
        $member -> user_id = session('user_id');
        $member->save();
    }
}
}
