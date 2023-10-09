<?php

namespace Database\Seeders;

use App\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nombresYCorreos = [
            [
                "nombre" => "Juan Pérez",
                "correo" => "juan.perez@example.com",
            ],
            [
                "nombre" => "María Rodríguez",
                "correo" => "maria.rodriguez@example.com",
            ],
            [
                "nombre" => "Luis García",
                "correo" => "luis.garcia@example.com",
            ],
            [
                "nombre" => "Ana López",
                "correo" => "ana.lopez@example.com",
            ],
            [
                "nombre" => "Carlos Martínez",
                "correo" => "carlos.martinez@example.com",
            ],
            [
                "nombre" => "Laura González",
                "correo" => "laura.gonzalez@example.com",
            ],
            [
                "nombre" => "José Ramírez",
                "correo" => "jose.ramirez@example.com",
            ],
            [
                "nombre" => "Isabel Hernández",
                "correo" => "isabel.hernandez@example.com",
            ],
            [
                "nombre" => "Pedro Díaz",
                "correo" => "pedro.diaz@example.com",
            ],
            [
                "nombre" => "Sofía Morales",
                "correo" => "sofia.morales@example.com",
            ],
            [
                "nombre" => "Antonio Castro",
                "correo" => "antonio.castro@example.com",
            ],
            [
                "nombre" => "Carmen Ruiz",
                "correo" => "carmen.ruiz@example.com",
            ],
            [
                "nombre" => "Fernando Sánchez",
                "correo" => "fernando.sanchez@example.com",
            ],
            [
                "nombre" => "Marta López",
                "correo" => "marta.lopez@example.com",
            ],
            [
                "nombre" => "Manuel Torres",
                "correo" => "manuel.torres@example.com",
            ],
            [
                "nombre" => "Elena Navarro",
                "correo" => "elena.navarro@example.com",
            ],
            [
                "nombre" => "Javier Jiménez",
                "correo" => "javier.jimenez@example.com",
            ],
            [
                "nombre" => "Patricia Pérez",
                "correo" => "patricia.perez@example.com",
            ],
            [
                "nombre" => "Diego García",
                "correo" => "diego.garcia@example.com",
            ],
            [
                "nombre" => "Silvia Castro",
                "correo" => "silvia.castro@example.com",
            ],
        ];
        foreach($nombresYCorreos as $datos){
            $producto1 = new Cliente;
            $producto1->name = $datos['nombre'];
            $producto1->email = $datos['correo'];
            $producto1->save();
        }
    }
}
