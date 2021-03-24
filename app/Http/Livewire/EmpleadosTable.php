<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmpleadosTable extends Component
{
    PUBLIC $camp ;
    public function render()
    {
        return view('livewire.empleados-table');
    }
}
