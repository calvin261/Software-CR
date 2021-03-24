<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClientesTable extends Component
{
    PUBLIC $camp ;
    public function render()
    {
        return view('livewire.clientes-table');
    }
}
