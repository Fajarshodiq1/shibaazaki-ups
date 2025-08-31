<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeroHeader extends Component
{
    public $title;
    public $subtitle;
    public $searchable;
    public $background;
    public $searchAction;
    public $searchName;
    public $searchPlaceholder;

    public function __construct(
        $title,
        $subtitle = '', 
        $searchable = false, 
        $background = null, 
        $searchAction = null,
        $searchName = 'search',
        $searchPlaceholder = 'Cari artikel...'
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->searchable = $searchable;
        $this->background = $background ??
            "https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
        $this->searchAction = $searchAction ?? url()->current();
        $this->searchName = $searchName;
        $this->searchPlaceholder = $searchPlaceholder;
    }

    public function render()
    {
        return view('components.hero-header');
    }
}