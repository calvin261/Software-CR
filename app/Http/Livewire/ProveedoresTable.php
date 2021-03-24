<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProveedoresTable extends Component
{
    public $camp;
    public function render()
    {
        return view('livewire.proveedores-table');
    }
}
