<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextarea extends Component
{
    public $label, $name, $value, $rows, $required, $isEditor;

    public function __construct($label = null, $name = null, $value = null, $rows = 5, $required = false, $isEditor = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->rows = $rows;
        $this->required = $required;
        $this->isEditor = $isEditor;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.form-textarea');
    }
}
