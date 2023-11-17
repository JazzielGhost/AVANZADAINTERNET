<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Test User';
        $user->lastname = 'Test lastname'; //cualquier dato que se añada aca, debe de estar en fillable
        $user->email = 'maqn@gmail.com';
        $user->password = '123456';
        $user->save();
        /*User::factory()
            ->count(10)
            ->hasPosts(1)
            ->create();*/
        User::factory(10)->create();
        

    }
}
