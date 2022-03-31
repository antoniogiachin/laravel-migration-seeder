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
        // $firenze = new Holiday();
        // $firenze->name = 'Vacanza dei sogni a Firenze!';
        // $firenze->amount = 250.35;
        // $firenze->hotel = 'Hotel 4 Stagioni';
        // $firenze->refound = 0;
        // $firenze->all_inclusive = 1;
        // $firenze->destination = 'Firenze, San Miniato, Prato';
        // $firenze->person_number = 2;
        // $firenze->start_date = '2022-06-23';
        // $firenze->end_date = '2022-06-25';
        // $firenze->transport = 'Frecciarossa';
        // $firenze->description = 'Spettacolare vacanza per due persone a Firenze e in Toscana!';
        // $firenze->save();

        // //seconda entry tabella
        // $roma = new Holiday();
        // $roma->name = 'Chi va a Roma...';
        // $roma->amount = 590.99;
        // $roma->hotel = 'Hotel Mazzini';
        // $roma->refound = 1;
        // $roma->all_inclusive = 1;
        // $roma->destination = 'Roma';
        // $roma->person_number = 4;
        // $roma->start_date = '2022-05-23';
        // $roma->end_date = '2022-06-28';
        // $roma->transport = 'Alitalia';
        // $roma->description = 'Visita i musei di Roma e lasciati incantare dalla immondizia nel centro storico!';
        // $roma->save();

        // //terza entry tabella
        // $newHoliday = new Holiday();
        // $napoli->name = "Napul'è mille culure...";
        // $napoli->amount = 190.99;
        // $napoli->hotel = 'Hotel Scugnizz';
        // $napoli->refound = 0;
        // $napoli->all_inclusive = 0;
        // $napoli->destination = 'Napoli, Reggia di Caserta';
        // $napoli->person_number = 2;
        // $napoli->start_date = '2022-07-23';
        // $napoli->end_date = '2022-08-28';
        // $napoli->transport = 'Frecciarossa';
        // $napoli->description = 'Il cuoppo vicino stazione Toledo vale il prezzo della tua prossima vacanza!';
        // $napoli->save();

        //richiamo il config
        $holidays = config('holidays');

        // ciclo i dati in config, per ognuno dico: istanzia un nuovo holiday e setta gli attributi come di seguito
        foreach ($holidays as $holiday) {
            $newHoliday = new Holiday();
            $newHoliday->name = $holiday['name'];
            $newHoliday->amount = $holiday['amount'];
            $newHoliday->hotel = $holiday['hotel'];
            $newHoliday->refound = $holiday['refound'];
            $newHoliday->all_inclusive = $holiday['all_inclusive'];
            $newHoliday->destination = $holiday['destination'];
            $newHoliday->person_number = $holiday['person_number'];
            $newHoliday->start_date = $holiday['start_date'];
            $newHoliday->end_date = $holiday['end_date'];
            $newHoliday->transport = $holiday['transport'];
            $newHoliday->description = $holiday['description'];
            $newHoliday->save();
        }


    }
}
