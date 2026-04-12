<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSelect extends Component
{
    public $label;
    public $name;
    public $value;
    public $options;
    public $required;

    public function __construct(
        $label              = null,
        $name               = null,
        $value              = null,
        $options            = [],
        $required           = false
    ) {
        $this->label        = $label;
        $this->name         = $name;
        $this->value        = $value;
        $this->options      = $options;
        $this->required     = $required;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.form-select');
    }
}
