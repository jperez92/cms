<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(users::class);
         $this->call(categoria::class);
         $this->call(tag::class);
         $this->call(post::class);
    }
}
