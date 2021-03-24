<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RecetasTable extends Component
{
    PUBLIC $camp ;
    public function render()
    {
        return view('livewire.recetas-table');
    }
}
