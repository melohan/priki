<?php

namespace App\View\Components;

use App\Models\Practice;
use Illuminate\View\Component;

class Comment extends Component
{

    private $practice;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Practice $practice)
    {
        $this->practice = $practice;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.opinion.comment-form')->with('practice', $this->practice);
    }
}
