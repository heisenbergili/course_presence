<div>
    {{-- Show all students --}}
    @include('livewire.includes.all-students')


    {{-- This is to add a student --}}
    @include('livewire.includes.add')

    @if (session('success'))
        <span class="text-success"> Saved. </span>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <div class="d-flex justify-content-center mt-4">
        {{ $students->links() }}
    </div> --}}

</div>
