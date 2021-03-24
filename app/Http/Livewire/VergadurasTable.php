<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VergadurasTable extends Component
{
    public $camp = null;
    public function render()
    {
        return view('livewire.vergaduras-table');
    }
}
