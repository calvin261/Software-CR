<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FlujoCajaTable extends Component
{
    PUBLIC $camp ;
    public function render()
    {
        return view('livewire.flujo-caja-table');
    }
}
