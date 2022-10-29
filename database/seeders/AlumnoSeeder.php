<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'no_control' => '123456789012',
            'nombre' => 'Santiago',
            'edad' => 17,
            'sexo' => 1,
            'fechaDeNacimiento' => '2005-10-21',
            'domicilio' => 'Calle valle la lima 2530',
            'telefono' => '6673828068'
        ]);
        
        Alumno::create([
            'no_control' => '123456789012',
            'nombre' => 'Santiago',
            'edad' => 17,
            'sexo' => 1,
            'fechaDeNacimiento' => '2005-10-21',
            'domicilio' => 'Calle valle la lima 2530',
            'telefono' => '6673828068'
        ]);

        Alumno::create([
            'no_control' => '123456789012',
            'nombre' => 'Santiago',
            'edad' => 17,
            'sexo' => 1,
            'fechaDeNacimiento' => '2005-10-21',
            'domicilio' => 'Calle valle la lima 2530',
            'telefono' => '6673828068'
        ]);

        Alumno::create([
            'no_control' => '123456789012',
            'nombre' => 'Santiago',
            'edad' => 17,
            'sexo' => 1,
            'fechaDeNacimiento' => '2005-10-21',
            'domicilio' => 'Calle valle la lima 2530',
            'telefono' => '6673828068'
        ]);

        Alumno::create([
            'no_control' => '123456789012',
            'nombre' => 'Santiago',
            'edad' => 17,
            'sexo' => 1,
            'fechaDeNacimiento' => '2005-10-21',
            'domicilio' => 'Calle valle la lima 2530',
            'telefono' => '6673828068'
        ]);

        Alumno::create([
            'no_control' => '123456789012',
            'nombre' => 'Santiago',
            'edad' => 17,
            'sexo' => 1,
            'fechaDeNacimiento' => '2005-10-21',
            'domicilio' => 'Calle valle la lima 2530',
            'telefono' => '6673828068'
        ]);
    }
}
