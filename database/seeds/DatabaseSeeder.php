<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SermonTableSeeder::class);
    }

}
