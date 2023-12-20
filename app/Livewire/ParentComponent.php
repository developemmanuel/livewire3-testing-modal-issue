<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $showModal = false;

    public function toggleModal(){
        $this->showModal = !$this->showModal;
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}
