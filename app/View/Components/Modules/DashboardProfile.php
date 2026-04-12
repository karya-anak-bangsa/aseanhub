<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardProfile extends Component
{
    public $title;
    public $collapse;
    public $fields;

    public function __construct($title = "", $collapse = false, $fields = [])
    {
        $this->title = $title;
        $this->collapse = $collapse;
        $this->fields = $fields;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.dashboard-profile');
    }
}
