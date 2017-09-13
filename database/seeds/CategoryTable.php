<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Science';
        $category->save();

        $category = new Category();
        $category->name = 'Star';
        $category->save();

        $category = new Category();
        $category->name = 'Fashion';
        $category->save();

        $category = new Category();
        $category->name = 'Technology';
        $category->save();

        $category = new Category();
        $category->name = 'Sport';
        $category->save();

        $category = new Category();
        $category->name = 'Travel';
        $category->save();

        $category = new Category();
        $category->name = 'Music';
        $category->save();

        $category = new Category();
        $category->name = 'Film';
        $category->save();
    }
}
