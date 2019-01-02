<?php

use Illuminate\Database\Seeder;
use App\Secciones;
class SeccionesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sec = new Secciones();
        $sec->nombre = 'carousel';
        $sec->descripcion = 'Carousel principal';
        $sec->save();
        $sec = new Secciones();
        $sec->nombre = 'convocatorias';
        $sec->descripcion = 'Convocatorias\Temas de interes';
        $sec->save();
        $sec = new Secciones();
        $sec->nombre = 'tv';
        $sec->descripcion = 'Toluca tv';
        $sec->save();

    }
}
