<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();

        $id = DB::table('category')->insertGetId(['category_name' => 'Noworodek', 'slug' => 'noworodek']);
        DB::table('category')->insert(['category_name'=>'Kurtki i płaszcze', 'slug'=>'kurtki-i-plaszcze', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Koszule', 'slug'=>'koszule', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Bluzy', 'slug'=>'bluzy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spodnie', 'slug'=>'spodnie', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Legginsy', 'slug'=>'legginsy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spódnice', 'slug'=>'spodnice', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Swetry', 'slug'=>'swetry', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Sukienki', 'slug'=>'swetry', 'upper_id'=>$id]);   

        $id = DB::table('category')->insertGetId(['category_name' => 'Dziewczynka', 'slug' => 'dziewczynka']);
        DB::table('category')->insert(['category_name'=>'Kurtki i płaszcze', 'slug'=>'kurtki-i-plaszcze', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Koszule', 'slug'=>'koszule', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Bluzy', 'slug'=>'bluzy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spodnie', 'slug'=>'spodnie', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Legginsy', 'slug'=>'legginsy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spódnice', 'slug'=>'spodnice', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Swetry', 'slug'=>'swetry', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Sukienki', 'slug'=>'swetry', 'upper_id'=>$id]);

        $id = DB::table('category')->insertGetId(['category_name' => 'Chłopiec', 'slug' => 'chlopiec']);
        DB::table('category')->insert(['category_name'=>'Kurtki i płaszcze', 'slug'=>'kurtki-i-plaszcze', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Koszule', 'slug'=>'koszule', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Bluzy', 'slug'=>'bluzy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spodnie', 'slug'=>'spodnie', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Legginsy', 'slug'=>'legginsy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spódnice', 'slug'=>'spodnice', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Swetry', 'slug'=>'swetry', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Sukienki', 'slug'=>'swetry', 'upper_id'=>$id]);

        $id = DB::table('category')->insertGetId(['category_name' => 'Dla mamy wciąży', 'slug' => 'dla-mamy-wciazy']);
        DB::table('category')->insert(['category_name'=>'Kurtki i płaszcze', 'slug'=>'kurtki-i-plaszcze', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Koszule', 'slug'=>'koszule', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Bluzy', 'slug'=>'bluzy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spodnie', 'slug'=>'spodnie', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Legginsy', 'slug'=>'legginsy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spódnice', 'slug'=>'spodnice', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Swetry', 'slug'=>'swetry', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Sukienki', 'slug'=>'swetry', 'upper_id'=>$id]);

        $id = DB::table('category')->insertGetId(['category_name' => 'Wyprzedaż', 'slug' => 'wyprzedaz']);
        DB::table('category')->insert(['category_name'=>'Kurtki i płaszcze', 'slug'=>'kurtki-i-plaszcze', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Koszule', 'slug'=>'koszule', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Bluzy', 'slug'=>'bluzy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spodnie', 'slug'=>'spodnie', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Legginsy', 'slug'=>'legginsy', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Spódnice', 'slug'=>'spodnice', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Swetry', 'slug'=>'swetry', 'upper_id'=>$id]);   
        DB::table('category')->insert(['category_name'=>'Sukienki', 'slug'=>'swetry', 'upper_id'=>$id]);
    }
}
