<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public $label;
    public $name;
    public $type;
    public $value;
    public $required;

    public function __construct(
        $label = null,
        $name = null,
        $type = "text",
        $value = null,
        $required = false
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->required = $required;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.form-input');
    }
}
