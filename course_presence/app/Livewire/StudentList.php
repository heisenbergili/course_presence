<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class StudentList extends Component
{

    use WithPagination;

    // Define a rules for the input
    #[Rule('required|min:5|max:6')]
    public $matricule;
    #[Rule('required|min:3|max:50')]
    public $firstname;
    #[Rule('required|min:3|max:50')]
    public $lastname;

    public function add()
    {
        //1.validate the attributes and return them in array
        //2.insert the array data in the student table
        Student::create($this->validate());

        // To clear the input
        $this->reset('matricule', 'firstname', 'lastname');

        //send a session message
        session()->flash('success', 'Student created.');
    }

    /**
     * Note:
     * If you want use validate and insert it in table
     * the attributs of this class must have the same names
     * as the columns of the table
     */

    public function delete($matricule)
    {
        Student::where('matricule', $matricule)->delete();
    }

    public function update()
    {
        dd(Student::paginate(3));
        dd('update');
    }

    public function render()
    {
        return view('livewire.student-list', [
            'students' => Student::paginate(5)
        ]);
    }
}
