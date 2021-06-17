<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario1 = new User;
        $usuario1->name = "ali";
        $usuario1->email = "ali@gmail.com";
        $usuario1->password = bcrypt("ali12345");
        $usuario1->save();
        $usuario2 = new User;
        $usuario2->name = "fernando";
        $usuario2->email = "fernando@gmail.com";
        $usuario2->password = bcrypt("fernando12345");
        $usuario2->save();

    }
}
