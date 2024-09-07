<?php

namespace FlagIcons;

use Illuminate\View\Component;

class FlagIcon extends Component
{
    public $type;
    public $code;
    public $width;
    public $height;

    public function __construct($type, $code, $width = 'auto', $height = 'auto')
    {
        $this->type = $type;
        $this->code = $code;
        $this->width = $width;
        $this->height = $height;
    }

    public function render()
    {
        return view('flag-icons::components.flag');
    }
}
