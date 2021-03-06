<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(\App\Models\Company::find(2));
        factory(\App\Models\Category::class, 50)->create();

        \Tenant::setTenant(\App\Models\Company::find(3));
        factory(\App\Models\Category::class, 50)->create();
    }
}
