<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($val = 0;$val <= 5; $val++){
            DB:table('posts')->insert([
                'text'=> 'test'.$val,
                'user_id' => $val,
                'created_at' => now()
            ]);
        }
    }
}

// for($val = 1;$val<=10;$val++){
//     DB::table('users')->insert([
//         'name'=> 'test'.$val,
//         'email' => 'test'.$val.'@example.com',
//         'password'=> bcrypt('test'.$val)
//     ]);
// }
