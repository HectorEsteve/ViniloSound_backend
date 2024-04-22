<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $rol1 = new Rol();
        $rol1->name = "user";
        $rol1->save();

        $rol2 = new Rol();
        $rol2->name = "premium";
        $rol2->save();

        $rol3 = new Rol();
        $rol3->name = "business";
        $rol3->save();

        $rol4 = new Rol();
        $rol4->name = "admin";
        $rol4->save();

        $rol5 = new Rol();
        $rol5->name = "superadmin";
        $rol5->save();
    }
}
