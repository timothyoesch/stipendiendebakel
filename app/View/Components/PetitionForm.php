<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PetitionForm extends Component
{
    public $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($count = 0)
    {
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.petition-form');
    }
}
