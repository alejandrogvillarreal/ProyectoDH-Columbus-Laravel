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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class)->times(150)->create();

        $brands = factory(App\Brand::class)->times(10)->create();
        $categories = factory(App\Category::class)->times(9)->create();
        $colors = factory(App\Color::class)->times(9)->create();
        $sizes = factory(App\Size::class)->times(7)->create();
        $states = factory(App\State::class)->times(3)->create();
        $subcategories = factory(App\Subcategory::class)->times(2)->create();
        $products = factory(App\Product::class)->times(50)->create();
    		$users = factory(App\User::class)->times(150)->create();
        



        foreach ($products as $oneProduct) {
    			$oneProduct->brand()->associate($brands->random(1)->first()->id);
          $oneProduct->category()->associate($categories->random(1)->first()->id);
    			$oneProduct->user()->associate($users->random(1)->first()->id);          
    			$oneProduct->save();

    			$oneProduct->colors()->sync($colors->random(3));
          $oneProduct->sizes()->sync($sizes->random(3));

    		}

        // foreach ($categories as $oneCategory) {
        //   $oneCategory->subcategories()->attach($subcategories->random(1)->first()->id);
        //   $oneCategory->save();
        // }



        foreach ($categories as $oneCategory) {
          $oneCategory->subcategories()->sync($subcategories->random(2));
        }


    }
}
