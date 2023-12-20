<div id="parent-component">
    <button wire:click="toggleModal">Show modal</button>
    @if($showModal)
        <livewire:modal-component />
    @endif
</div>
