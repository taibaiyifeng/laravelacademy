<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        	// App\Post::truncate();
        	// factory(App\Post::class,20)->create();
        $user = new App\User();
        $user->name = 'admin';
        $user->email = 'taibaiyifeng@outlook.com';
        $user->password = bcrypt('admin');
        $user->save();
        
    }
}
