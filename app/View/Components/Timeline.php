<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Timeline extends Component
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('components.timeline');
    }
}
