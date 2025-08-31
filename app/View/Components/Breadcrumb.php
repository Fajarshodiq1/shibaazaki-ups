<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $items;

    /**
     * @param array $items Contoh: [['label' => 'Home', 'url' => route('home')], ['label' => 'Blog']]
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}