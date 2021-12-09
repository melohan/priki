<?php

namespace App\Http\Livewire\Practice;

use App\Models\Domain;
use App\Models\Practice;
use Livewire\Component;

class DropdownMenu extends Component
{
    public $totalPractices = 0;
    public $domains = [];

    public function render()
    {
        $this->totalPractices = Practice::countPublished();
        $this->domains = Domain::all();
        return view('livewire.practice.dropdown-menu');
    }
}
