<?php

namespace App\View\Components\popUps;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class updateClass extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pop-ups.update-class');
    }
}
