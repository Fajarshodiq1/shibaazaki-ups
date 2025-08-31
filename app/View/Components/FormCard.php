<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormCard extends Component
{
    public $action;
    public $method;
    public $title;
    public $subtitle;
    public $enctype;
    public $id;

    /**
     * Create a new component instance.
     *
     * @param string $action
     * @param string $method
     * @param string|null $title
     * @param string|null $subtitle
     * @param string|null $enctype
     * @param string|null $id
     */
    public function __construct($action, $method = 'POST', $title = null, $subtitle = null, $enctype = null, $id = null)
    {
        $this->action = $action;
        $this->method = strtoupper($method);
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->enctype = $enctype;
        $this->id = $id ?? 'defaultForm';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-card');
    }
}