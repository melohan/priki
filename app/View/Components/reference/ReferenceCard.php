<?php

namespace App\View\Components\reference;

use App\Models\Reference;
use Illuminate\View\Component;

class ReferenceCard extends Component
{

    private $reference;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Reference $reference)
    {
        $this->reference = $reference;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reference.reference-card')->with('reference', $this->reference);;
    }
}
