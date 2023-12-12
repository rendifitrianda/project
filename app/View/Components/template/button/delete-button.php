<?php

namespace App\View\Components\template\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class deletebutton extends Component
{
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.template.button.delete-button');
    }
}
