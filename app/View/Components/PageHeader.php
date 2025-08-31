<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public $title;
    public $subtitle;
    public $buttonRoute;
    public $buttonText;

    public function __construct($title, $subtitle = null, $buttonRoute = null, $buttonText = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->buttonRoute = $buttonRoute;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.page-header');
    }
}