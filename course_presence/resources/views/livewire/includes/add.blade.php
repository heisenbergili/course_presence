<form wire:submit='add'>
    <input placeholder="number" type="text" wire:model='matricule' >
    <input placeholder="first name" type="text" wire:model='firstname'>
    <input placeholder="last name" type="text" wire:model='lastname'>
    <button class="btn btn-info" >Add</button>
</form>