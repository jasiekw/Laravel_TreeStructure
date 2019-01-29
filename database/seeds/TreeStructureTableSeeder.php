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
        $Dane = new TreeStructure();
        $Dane-> id ='1';
        $Dane-> name ='root';
        $Dane-> parent ='0';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='2';
        $Dane-> name ='BMW';
        $Dane-> parent ='1';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='3';
        $Dane-> name ='FORD';
        $Dane-> parent ='1';
        $Dane-> save();
 
          $Dane = new TreeStructure();
        $Dane-> id ='4';
        $Dane-> name ='VW';
        $Dane-> parent ='1';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='6';
        $Dane-> name ='SUV';
        $Dane-> parent ='4';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='9';
        $Dane-> name ='Sedan';
        $Dane-> parent ='4';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='11';
        $Dane-> name ='Hatchback';
        $Dane-> parent ='3';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='13';
        $Dane-> name ='318';
        $Dane-> parent ='94';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='14';
        $Dane-> name ='520';
        $Dane-> parent ='94';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='15';
        $Dane-> name ='X5';
        $Dane-> parent ='101';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='17';
        $Dane-> name ='Mondeo';
        $Dane-> parent ='82';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='18';
        $Dane-> name ='Focus';
        $Dane-> parent ='11';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='19';
        $Dane-> name ='Golf';
        $Dane-> parent ='92';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='20';
        $Dane-> name ='Passat';
        $Dane-> parent ='9';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='21';
        $Dane-> name ='Tuareg';
        $Dane-> parent ='6';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='22';
        $Dane-> name ='Tiguan';
        $Dane-> parent ='6';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='34';
        $Dane-> name ='Porsche';
        $Dane-> parent ='1';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='77';
        $Dane-> name ='911';
        $Dane-> parent ='85';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='78';
        $Dane-> name ='Turbo S';
        $Dane-> parent ='77';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='79';
        $Dane-> name ='GT2 RS';
        $Dane-> parent ='77';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='82';
        $Dane-> name ='Sedan';
        $Dane-> parent ='3';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='85';
        $Dane-> name ='Sport';
        $Dane-> parent ='34';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='92';
        $Dane-> name ='Hatchback';
        $Dane-> parent ='4';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='94';
        $Dane-> name ='Sedan';
        $Dane-> parent ='2';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='96';
        $Dane-> name ='120';
        $Dane-> parent ='100';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='98';
        $Dane-> name ='118';
        $Dane-> parent ='100';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='99';
        $Dane-> name ='116';
        $Dane-> parent ='100';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='100';
        $Dane-> name ='Hatchack';
        $Dane-> parent ='2';
        $Dane-> save();
 
        $Dane = new TreeStructure();
        $Dane-> id ='101';
        $Dane-> name ='SUV';
        $Dane-> parent ='2';
        $Dane-> save();
    }
}
