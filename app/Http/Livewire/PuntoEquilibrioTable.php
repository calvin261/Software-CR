<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PuntoEquilibrioTable extends Component
{
    PUBLIC $camp ;
    public function render()
    {
        return view('livewire.punto-equilibrio-table');
    }
}
