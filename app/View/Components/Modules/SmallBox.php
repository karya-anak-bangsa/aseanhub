<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SmallBox extends Component
{
    public $color;
    public $icon;
    public $title;
    public $value;

    public function __construct($color, $icon, $title, $value)
    {
        $this->color = $color;
        $this->icon  = $icon;
        $this->title = $title;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.small-box');
    }
}
