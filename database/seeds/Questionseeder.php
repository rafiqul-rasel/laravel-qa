<?php

use Illuminate\Database\Seeder;

class Questionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,20)->create()->each(function ($u){
            $u->question()->savemany(factory(\App\question::class,rand(7,10))->make());
        });
    }
}
