<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class alert2 extends Component
{
    public $css;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type)
        {
            case 'info':
                $css = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
            break;

            case 'danger':
                $css = "text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400";
            break;

            case 'success':
                $css = "text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400";
            break;
        
        default:
            $css = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
        break;
        }

        $this->css = $css;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
