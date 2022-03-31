# Esercizio 31 Marzo
- Crea Tabella per pacchetti viaggio agenzia turistica (definire struttura con Migration)
    * php artisan make:migration create_holidays_table
- Inserire dati tramite Seeder
    * php artisan make:seeder HolidaysTableSeeder
    * php artisan make:model Holiday
    * php artisan db:seed --class=HolidaysTableSeeder

- Mi accorgo di aver dimenticato nella tabella di inserire il campo 'hotel'...
    * faccio un php artisan make:migration update_holidays_table --table=holidays - aggiungo il valore dopo il prezzo
    * con il comando php artisan migrate:fresh --seed rimuovo tutti i seed e rilancia da capo le migration, ora aggiungo al seed il valore di hotel e poi lo 'inietto'
    *php artisan db:seed --class=HolidaysTableSeeder

- dinamicizzo seeding: creo un config holidays con contenuto, passo il config al seeder, ciclo il config e creo nuove istanze per classe model, lancio php artisan db:seed --class=HolidaysTableSeeder
