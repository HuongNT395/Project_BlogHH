<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Sport';
        $category->save();

        $category1 = new Category();
        $category1->name = 'Technology';
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Fashion';
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Music';
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Travel';
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Firm';
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Star';
        $category1->save();
    }
}
