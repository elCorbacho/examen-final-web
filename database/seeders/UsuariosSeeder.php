<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;

use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        $usuario = [
            [
                'rut' => '12345678-9',
                'nombre' => 'juan',
                'apellido' => 'perez',
                'email' => 'juan.perez@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '98765432-1',
                'nombre' => 'ana',
                'apellido' => 'torres',
                'email' => 'ana.torres@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '11222333-4',
                'nombre' => 'carlos',
                'apellido' => 'paredes',
                'email' => 'carlos.paredes@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '55667788-5',
                'nombre' => 'lucia',
                'apellido' => 'gomez',
                'email' => 'lucia.gomez@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '22334455-6',
                'nombre' => 'miguel',
                'apellido' => 'rojas',
                'email' => 'miguel.rojas@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '33445566-7',
                'nombre' => 'sofia',
                'apellido' => 'ramirez',
                'email' => 'sofia.ramirez@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '44556677-8',
                'nombre' => 'pedro',
                'apellido' => 'castillo',
                'email' => 'pedro.castillo@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '55667788-9',
                'nombre' => 'maria',
                'apellido' => 'lopez',
                'email' => 'maria.lopez@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '66778899-0',
                'nombre' => 'juan',
                'apellido' => 'martinez',
                'email' => 'juan.martinez@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
            [
                'rut' => '77889900-1',
                'nombre' => 'valeria',
                'apellido' => 'diaz',
                'email' => 'valeria.diaz@ventasfix.cl',
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($usuario as $key => $value) {
            Usuarios::create($value);
        }
    }
}
