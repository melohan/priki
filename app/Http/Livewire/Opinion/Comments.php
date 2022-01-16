<?php

namespace App\Http\Livewire\Opinion;

use App\Models\Opinion;
use App\Models\Practice;
use Livewire\Component;

class Comments extends Component
{

    public $hide = true;
    public $post;

    public function display()
    {
        $this->hide = !$this->hide;
    }

    public function render()
    {
        return view('livewire.opinion.comments');
    }
}
