<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FrutasTable extends Component
{
    public $camp = null;
    public function render()
    {

        return view('livewire.frutas-table');
    }
}
