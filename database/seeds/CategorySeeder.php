<?php

use App\User;
use App\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             Category::factory(10)->hasProducts(10)->create();
            User::create([
                          "name"=>"TAMBOURA Abdoulaye",
                          "email"=>"laya@tambouraabdoulaye.com",
                          "password"=>Hash::make("12345678"),
    
            ]);      
        //
    }
}
