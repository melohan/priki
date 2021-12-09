<?php

namespace App\Http\Livewire\Practice;

use Livewire\Component;
use App\Models\Practice;

class LastUpdates extends Component
{
    public $practices = [];
    public $days = 5;

    public function increment()
    {
        $this->days++;
    }

    public function render()
    {
        // On repasse à 5 si on injecte une valeur éronnée.
        $this->days = intval($this->days);
        $this->practices =  Practice::getLastUpdated($this->days);
        return view('livewire.practice.last-updates');
    }
}
