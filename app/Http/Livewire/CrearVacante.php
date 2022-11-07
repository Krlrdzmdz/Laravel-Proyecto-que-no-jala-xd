<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{

    public function render()
    {

        //Aqui consultamos la DB
        $salarios = Salario::all();
        return view('Livewire.crear-vacante', [
            'salarios' => $salarios
        ]);
    }
}

