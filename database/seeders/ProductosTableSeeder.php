<?php

namespace Database\Seeders;

use App\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $muebles = [
            "Mueble de Cedro",
            "Mueble de Caoba",
            "Mueble de Pino",
            "Mueble de Roble",
            "Mueble de Nogal",
            "Mueble de Pino Macizo",
            "Sofá de Cuero",
            "Mesa de Comedor",
            "Silla de Mimbre",
            "Armario de Roble",
            "Mueble de TV",
            "Escritorio de Madera",
            "Silla de Oficina",
            "Cama King Size",
            "Sofá Cama",
            "Mesa de Café",
            "Estantería de Libros",
            "Mueble de Baño",
            "Mesa de Centro",
            "Mueble de Cocina"
        ];
        foreach($muebles as $mueble){
            $producto1 = new Producto;
            $producto1->name = $mueble;
            $producto1->stock = rand(5, 10);
            $producto1->precio = rand(5, 10)*500;
            $producto1->save();
        }

    }
}
