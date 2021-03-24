<?php

use Illuminate\Database\Seeder;


class ParentCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        for($i=1;$i<=6;$i++){
            \App\Models\Parent_Category::create([
          
        'name'=> 'test'.$i
           
        ]);
    }
    }
}
