<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Nguyễn Thị Hương";
        $user->email = "huongnt1@nal.vn";
        $user->password = bcrypt("123456");
        $user->avatar = "huong.jpg";
        $user->active = 1;
        $user->save();

        $user1 = new User();
        $user1->name = "Tô Thị Thu Hoài";
        $user1->email = "hoaittt@nal.vn";
        $user1->password = bcrypt("123456");
        $user1->avatar = "hoai.jpg";
        $user1 ->active = 0;
        $user1->save();
    }
}
