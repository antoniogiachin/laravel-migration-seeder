<?php
//richiamo il model
use App\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creare model per Holiday, poi creare nuova istanza qui per classe 
        $firenze = new Holiday();
        $firenze->name = 'Vacanza dei sogni a Firenze!';
        $firenze->amount = 250.35;
        $firenze->refound = 0;
        $firenze->all_inclusive = 1;
        $firenze->destination = 'Firenze, San Miniato, Prato';
        $firenze->person_number = 2;
        $firenze->start_date = '2022-06-23';
        $firenze->end_date = '2022-06-25';
        $firenze->transport = 'Frecciarossa';
        $firenze->description = 'Spettacolare vacanza per due persone a Firenze e in Toscana!';
        $firenze->save();



    }
}
