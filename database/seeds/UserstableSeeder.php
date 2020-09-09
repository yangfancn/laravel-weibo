<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = "Yangfan";
        $user->email = "244190857@qq.com";
        $user->password = bcrypt('19950930');
        $user->save();
    }
}
