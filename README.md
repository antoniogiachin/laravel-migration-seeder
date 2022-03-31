# Esercizio 31 Marzo
- Crea Tabella per pacchetti viaggio agenzia turistica (definire struttura con Migration)
    * php artisan make:migration create_holidays_table
- Inserire dati tramite Seeder
    * php artisan make:seeder HolidaysTableSeeder
    * php artisan make:model Holiday
    * php artisan db:seed --class=HolidaysTableSeeder
