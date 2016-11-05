<?php

use Illuminate\Database\Seeder;
use \App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Ololo',
			'email' => 'ololo@ololo.ol',
			'admin' => 1,
			'password' => bcrypt('12345678')]);
    }
}
