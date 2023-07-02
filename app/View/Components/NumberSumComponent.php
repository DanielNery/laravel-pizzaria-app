<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NumberSumComponent extends Component
{
    public $number;
    public $uniqueId;
    public $price;

    /**
     * Create a new component instance.
     *
     * @param  int  $number
     * @return void
     */
    public function __construct($number = 0, $uniqueId = '', $price = 0)
    {
        $this->number = $number;
        $this->uniqueId = $uniqueId;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.number-sum-component');
    }

    /**
     * Perform the number addition.
     *
     * @return void
     */
    public function addNumber()
    {
        $this->number += 1;
    }
}
