<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\models\User::all();
        $user = $users->first();
        $user_id = $user->id;

        //去掉第一个
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        //关注除了第一个以外的所有用户
        $user->follow($follower_ids);

        //其他用户都关注第一个用户
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
