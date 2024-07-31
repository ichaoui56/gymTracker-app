<?php

namespace App\View\Components\dashboardPages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categoryDashboard extends Component
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
        return view('components.dashboard-pages.category-dashboard');
    }
}
