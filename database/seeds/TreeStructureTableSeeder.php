<?php

use Illuminate\Database\Seeder;
use App\TreeStructure;

class TreeStructureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = new TreeStructure();
        $root->name = 'root';
        $root->parent = null;
        $root->save();

        $bmw = new TreeStructure();
        $bmw->name = 'BMW';
        $bmw->parent = $root->id;
        $bmw->save();

        $bmwSuv = new TreeStructure();
        $bmwSuv->name = 'SUV';
        $bmwSuv->parent = $bmw->id;
        $bmwSuv->save();

        $bmwX6 = new TreeStructure();
        $bmwX6->name = 'X6';
        $bmwX6->parent = $bmwSuv->id;
        $bmwX6->save();

        $bmwSedan = new TreeStructure();
        $bmwSedan->name = 'Sedan';
        $bmwSedan->parent = $bmw->id;
        $bmwSedan->save();

        $bmw5 = new TreeStructure();
        $bmw5->name = 'Seria 5';
        $bmw5->parent = $bmwSedan->id;
        $bmw5->save();

        $bmw530 = new TreeStructure();
        $bmw530->name = '530';
        $bmw530->parent = $bmw5->id;
        $bmw530->save();
    }
}
