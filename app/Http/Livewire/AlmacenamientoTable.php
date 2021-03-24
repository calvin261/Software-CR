<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlmacenamientoTable extends Component
{
    public $camp = null;
    public function render()
    {
        return view('livewire.almacenamiento-table');
    }
}
