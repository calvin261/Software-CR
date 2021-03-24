<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentInputSelect extends Component
{
    public $label;
    public $options;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, array $options, string $label)
    {
        $this->label = $label;
        $this->options = $options;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.component-input-select');
    }
}
