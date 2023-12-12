<?php

namespace App\View\Components\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nontification extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $id = null, public $path = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.nontification');
    }
}
