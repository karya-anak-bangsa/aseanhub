<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Callout extends Component
{
    public $type;
    public $icon;
    public $color;

    public function __construct($type = 'info', $icon = 'fa-book', $color = 'dark')
    {
        $this->type = $type;
        $this->icon = $icon;
        $this->color = $color;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.callout');
    }
}
