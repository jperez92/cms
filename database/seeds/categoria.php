<?php

use Illuminate\Database\Seeder;

class categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 20)->create();
    }
}
