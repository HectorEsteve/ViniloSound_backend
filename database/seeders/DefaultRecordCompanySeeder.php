<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RecordCompany;

class DefaultRecordCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $recordCompany1 = new RecordCompany();
        $recordCompany1->name = 'Sony Music';
        $recordCompany1->logo_url = 'https://www.directorioindustrialfarmaceutico.com/images/logos/sin-logo.jpg';
        $recordCompany1->website_url = 'https://www.sonymusic.com/';
        $recordCompany1->save();

        $recordCompany2 = new RecordCompany();
        $recordCompany2->name = 'Universal Music Group';
        $recordCompany2->logo_url = 'https://www.directorioindustrialfarmaceutico.com/images/logos/sin-logo.jpg';
        $recordCompany2->website_url = 'https://www.universalmusic.com/';
        $recordCompany2->save();

        $recordCompany3 = new RecordCompany();
        $recordCompany3->name = 'Warner Music Group';
        $recordCompany3->logo_url = 'https://www.directorioindustrialfarmaceutico.com/images/logos/sin-logo.jpg';
        $recordCompany3->active = false;
        $recordCompany3->website_url = 'https://www.warnermusicgroup.com/';
        $recordCompany3->save();
    }
}
