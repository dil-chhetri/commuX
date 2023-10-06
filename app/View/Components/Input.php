<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $onclick;
    public $label;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$name,$placeholder,$onclick="")
    {
        //
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->onclick = $onclick;
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
