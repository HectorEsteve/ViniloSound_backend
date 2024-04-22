<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Format;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $formato1 = new Format();
        $formato1->name = "Long Play (LP)";
        $formato1->diameter = 12;
        $formato1->rpm = "30 1/2";
        $formato1->duration_side = 30;
        $formato1->save();

        $formato2 = new Format();
        $formato2->name = "Maxi Single(MS)";
        $formato2->diameter = 12;
        $formato2->rpm = "45";
        $formato2->duration_side = 15;
        $formato2->save();

        $formato3 = new Format();
        $formato3->name = "Extended Play 10'(EP10') / LP";
        $formato3->diameter = 10;
        $formato3->rpm = "45";
        $formato3->duration_side = 20;
        $formato3->save();

        $formato4 = new Format();
        $formato4->name = "Extended Play 10'(EP10') / LP";
        $formato4->diameter = 10;
        $formato4->rpm = "33 1/2";
        $formato4->duration_side = 15;
        $formato4->save();

        $formato5 = new Format();
        $formato5->name = "Standart Play (SP)";
        $formato5->diameter = 10;
        $formato5->rpm = "78";
        $formato5->duration_side = 3;
        $formato5->save();

        $formato6 = new Format();
        $formato6->name = "Extended Play 7' (EP7')";
        $formato6->diameter = 7;
        $formato6->rpm = "30 1/2";
        $formato6->duration_side = 7;
        $formato6->save();

        $formato7 = new Format();
        $formato7->name = "Extended Play 7' (EP7')";
        $formato7->diameter = 7;
        $formato7->rpm = "45";
        $formato7->duration_side = 5;
        $formato7->save();

        $formato8 = new Format();
        $formato8->name = "Single";
        $formato8->diameter = 7;
        $formato8->rpm = "45";
        $formato8->duration_side = 3;
        $formato8->save();

    }
}
