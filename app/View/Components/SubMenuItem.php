<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubMenuItem extends Component
{

    public $text;
    public $link;
    public $permission;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $link, $permission = true)
    {
        $this->text = $text;
        $this->link = $link;
        // Show icon only when permission is true
        $this->permission = $permission;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.sub-menu-item');
    }

}
