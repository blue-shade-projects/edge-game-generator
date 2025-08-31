<div>
    <form wire:submit="submit">
        <input wire:model="count" type="text">
        <textarea wire:model="notes" name="" id="" cols="30" rows="10"></textarea>
        <button>Add Bird</button>
    </form>
</div>


<div>
    <p>{{ $count }}</p>

    <input type="number" wire:model.blur="number">

    <button wire:click="changeCount({{ $number }})">Change Count</button>
</div>
