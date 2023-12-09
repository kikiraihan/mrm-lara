<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    for ($i=0; $i < 20; $i++) { 
        $p = new Portfolio;
        $faker = Faker::create('id_ID'); // menggunakan bahasa Indonesia
        $p->judul = $faker->sentence($nbWords = 1, $variableNbWords = true);
        $p->kategori = $faker->randomElement($array = array(
            'arsitektur',
            'interior',
            'religion project'
        ));
        $p->lokasi = $faker->city;
        $p->tahun = $faker->numberBetween($min = 1990, $max = 2022);
        $p->luas_situs = $faker->numberBetween($min = 100, $max = 500);
        $p->luas_lantai = $faker->numberBetween($min = 50, $max = 200);
        $p->tinggi = $faker->numberBetween($min = 2, $max = 20);
        $p->pic = $faker->name;
        $p->tipe = $faker->randomElement($array = array('Rumah', 'Apartemen', 'Kantor', 'Hotel'));
        $p->cover = null;//$faker->imageUrl($width = 640, $height = 480);
        $p->save();
    } 

    }
}
