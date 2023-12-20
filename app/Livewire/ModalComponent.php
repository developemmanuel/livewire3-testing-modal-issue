<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public $dropdownItems = false;
    public function toggleDropdownItems(){
        $this->dropdownItems = !$this->dropdownItems;
    }
    public function render()
    {
        return view('livewire.modal-component');
    }
}
