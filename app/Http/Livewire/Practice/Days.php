<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;

class Days extends Component
{
    public $count = 5;

    public function increment()
    {
        $this->count = $this->count + 1;
    }

    public function decrement()
    {
        if ($this->count > 0)
            $this->count = $this->count - 1;
    }

    public function render()
    {
        return view('livewire.practice.days');
    }
}
