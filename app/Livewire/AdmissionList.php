<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class AdmissionList extends Component
{
    public $all_students;

    public function mount(){
        $this->all_students = Student::all();
    }

    public function deleteStudent($id){
         Student::find($id)->delete();
         return redirect()->route('list');
    }
    public function render()
    {
        return view('livewire.admission-list');
    }
}
