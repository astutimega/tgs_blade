<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $mtheme1;
    public $mtheme2;
    public $mtheme3;
    public function __construct($mtheme1, $mtheme2, $mtheme3)
    {
        $this->mtheme1 = $mtheme1;
        $this->mtheme2 = $mtheme2;
        $this->mtheme3 = $mtheme3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
