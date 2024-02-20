<?php

namespace App\Livewire;

use App\Models\Academic;
use Livewire\Component;
use App\Models\Student;

class AcademicsForm extends Component
{
    public $level, $class, $program, $institute, $board, $roll, $registration, $obtained, $total, $year, $exam;

    public $student_id;

    public $a_id;

    public $stu;

    public $message;

    protected $rules = [
        'level' => 'required',
        'class' => 'required',
        'program' => 'required',
        'roll' => 'required',
        'obtained' => 'required',
        'total' => 'required',
        'year' => 'required',
        'exam' => 'required',
    ];
    protected $messages = [
        'level' => 'Please Select Study level',
        'class' => 'Please Select Class',
        'program' => 'Please select Program',
        'roll' => 'Please Enter roll number',
        'obtained' => 'Please enter obtained marks',
        'total' => 'please enter total marks',
        'year' => 'Please enter passing year',
        'exam' => 'Please enter exam type'
    ];

    public function mount($id)
    {
        $this->student_id = $id;
        $this->stu = Student::find($this->student_id);
        if ($this->stu == null) {
            return redirect()->route('student');
        }

    }
    public function saveClose()
    {
        $this->validate();
        try {
            if ($this->a_id) {
                $academic = Academic::find($this->a_id);
                $academic->level = $this->level;
                $academic->class = $this->class;
                $academic->program = $this->program;
                $academic->institute = $this->institute;
                $academic->board = $this->board;
                $academic->roll = $this->roll;
                $academic->registration = $this->registration;
                $academic->obtained = $this->obtained;
                $academic->total = $this->total;
                $academic->year = $this->year;
                $academic->exam = $this->exam;
                $academic->student_id = $this->student_id;
                $academic->save();
            } else {
                $academic = new Academic;
                $academic->level = $this->level;
                $academic->class = $this->class;
                $academic->program = $this->program;
                $academic->institute = $this->institute;
                $academic->board = $this->board;
                $academic->roll = $this->roll;
                $academic->registration = $this->registration;
                $academic->obtained = $this->obtained;
                $academic->total = $this->total;
                $academic->year = $this->year;
                $academic->exam = $this->exam;
                $academic->student_id = $this->student_id;

                $academic->save();
            }
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
        }


        return redirect()->route('list');
    }

    public function editAcademic($id)
    {
        try {
            $this->a_id = $id;
            $academic = Academic::find($this->a_id);
            $this->level = $academic->level;
            $this->class = $academic->class;
            $this->program = $academic->program;
            $this->institute = $academic->institute;
            $this->board = $academic->board;
            $this->roll = $academic->roll;
            $this->registration = $academic->registration;
            $this->obtained = $academic->obtained;
            $this->total = $academic->total;
            $this->year = $academic->year;
            $this->exam = $academic->exam;
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
        }

    }

    public function deleteAcademic($id)
    {
        Academic::find($id)->delete();
    }
    public function guardian()
    {
        return redirect()->route('guardian', ['id' => $this->student_id]);
    }

    public function student()
    {
        return redirect()->route('student', ['id' => $this->student_id]);
    }
    public function render()
    {
        return view('livewire.academics-form');
    }
}
