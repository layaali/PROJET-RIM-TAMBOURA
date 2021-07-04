<?php

use App\Books;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 101; $i++) { 
            Books::create([
                'libelle' => 'book'.$i,
                'auteur' => 'auteur'.$i,
                'description' => 'description du livre',
                'categorie_id' => $i
            ]);
        }
    }
}
