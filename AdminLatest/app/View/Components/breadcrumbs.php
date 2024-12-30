<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumbs extends Component
{
    public $title;
    public $subtitle;

    /**
     * Create a new component instance.
     */
    public function __construct($title = "Title Name", $subtitle = "Title two")
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumbs');
    }
}
