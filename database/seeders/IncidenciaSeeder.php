<?php

namespace Database\Seeders;
use App\Models\Incidencia;

use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incidencia::factory(25)->create();
        /*
        $incidencia = new Incidencia();
        $incidencia->nom = "Incidencia 1";
        $incidencia->descripcio = "Bla bla bla bla";
        $incidencia->estatIncidencia = "Actiu";
        $incidencia->save();

        $incidencia2 = new Incidencia();
        $incidencia2->nom = "Incidencia 2";
        $incidencia2->descripcio = "Bla bla bla bla";
        $incidencia2->estatIncidencia = "Actiu";
        $incidencia2->save();

        $incidencia3 = new Incidencia();
        $incidencia3->nom = "Incidencia 3";
        $incidencia3->descripcio = "Bla bla bla bla";
        $incidencia3->estatIncidencia = "Actiu";
        $incidencia3->save();
        */
    }
}
