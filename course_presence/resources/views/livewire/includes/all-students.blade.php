@foreach ($students as $student)
    <div>
        <input type="text" value="{{ $student->matricule }}" readonly>
        <input type="text" value="{{ $student->firstname }}" readonly>
        <input type="text" value="{{ $student->lastname }}" readonly>
        <button class="btn btn-success" wire:click='update( {{ $student->matricule }} )'>edit</button>
        <button class="btn btn-danger" wire:click='delete( {{ $student->matricule }} )'>delete</button>
    </div>
@endforeach
