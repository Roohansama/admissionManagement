<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Cache;



class StudentForm extends Component
{
    use WithFileUploads;

    public $level, $batch, $class, $program, $type;



    public $name, $father, $gender, $dob, $cnic, $email, $religion, $marital, $mobile, $landline, $blood, $nationality, $hafiz, $referred, $city, $address1, $address2;
    public $person, $relation;

    public $student_id;

    public $field_value;

    public $message;

    public $next = false;


    public $url, $start_Index, $digit;


    protected $rules = [
        'level' => 'required',
        'batch' => 'required',
        'class' => 'required',
        'program' => 'required',
        // 'picture'=> 'required',
        'type' => 'required',
        'name' => 'required',
        'father' => 'required',
        'gender' => 'required',
        'dob' => 'required|date',
        'cnic' => 'required|max:11',
        'email' => 'required|email',
        'religion' => 'required',
        'mobile' => 'required',
        'nationality' => 'required',
        'hafiz' => 'required',
        'address1' => 'required',
        'address2' => 'required',


    ];

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'level' => 'Please select any study level',
        'batch' => 'Please select batch',
        'class' => 'Please choose a class',
        'program' => 'Please choose a program',
        'type' => 'Please choose Admission Type',
        'name' => 'Student Name is required',
        'father' => 'Father Name is required',
        'gender' => 'Plesae select a gender',
        'dob' => 'Please enter a date of birth',
        'cnic' => 'Student CNIC or B-form is required',
        'religion' => 'Please select religion',
        'mobile' => 'Enter student mobile number',
        'nationality' => 'Select student nationality',
        'hafiz' => 'Specify IF student is Hafiz e Quran or not',

    ];

    public function mount()
    {
        $this->url = request()->path();
        $start_Index = strpos($this->url, '/add') + strlen('/add');
        $digit = substr($this->url, $start_Index + 1);

        $this->student_id = $digit;
        if (!empty($this->student_id)) {
            $this->field_value = Student::find($this->student_id);
            $this->level = $this->field_value->level;
            $this->batch = $this->field_value->batch;
            $this->class = $this->field_value->class;
            $this->program = $this->field_value->program;
            $this->type = $this->field_value->type;
            $this->name = $this->field_value->name;
            $this->father = $this->field_value->father;
            $this->gender = $this->field_value->gender;
            $this->dob = $this->field_value->dob;
            $this->cnic = $this->field_value->cnic;
            $this->email = $this->field_value->email;
            $this->religion = $this->field_value->religion;
            $this->marital = $this->field_value->marital;
            $this->mobile = $this->field_value->mobile;
            $this->landline = $this->field_value->landline;
            $this->blood = $this->field_value->blood;
            $this->nationality = $this->field_value->nationality;
            $this->hafiz = $this->field_value->hafiz;
            $this->referred = $this->field_value->referred;
            $this->city = $this->field_value->city;
            $this->address1 = $this->field_value->current_address;
            $this->address2 = $this->field_value->permanent_address;
            $this->person = $this->field_value->person;
            $this->relation = $this->field_value->relation;
        }
    }



    public function saveClose()
    {
        $this->validate();
        try {
                if ($this->student_id) {
                    $student = Student::find($this->student_id);
                    $student->level = $this->level;
                    $student->batch = $this->batch;
                    $student->class = $this->class;

                    $student->program = $this->program;
                    $student->type = $this->type;
                    $student->name = $this->name;
                    $student->father = $this->father;
                    $student->gender = $this->gender;
                    $student->dob = $this->dob;
                    $student->cnic = $this->cnic;
                    $student->email = $this->email;
                    $student->religion = $this->religion;
                    $student->marital = $this->marital;
                    $student->mobile = $this->mobile;
                    $student->landline = $this->landline;
                    $student->blood = $this->blood;
                    $student->nationality = $this->nationality;
                    $student->hafiz = $this->hafiz;
                    $student->referred = $this->referred;
                    $student->city = $this->city;
                    $student->current_address = $this->address1;
                    $student->permanent_address = $this->address2;
                    $student->person = $this->person;
                    $student->relation = $this->relation;
                    $student->save();
                } else {
                    $student = new Student;

                    $student->level = $this->level;
                    $student->batch = $this->batch;
                    $student->class = $this->class;
                    $student->program = $this->program;
                    $student->type = $this->type;
                    $student->name = $this->name;
                    $student->father = $this->father;
                    $student->gender = $this->gender;
                    $student->dob = $this->dob;
                    $student->cnic = $this->cnic;
                    $student->email = $this->email;
                    $student->religion = $this->religion;
                    $student->marital = $this->marital;
                    $student->mobile = $this->mobile;
                    $student->landline = $this->landline;
                    $student->blood = $this->blood;
                    $student->nationality = $this->nationality;
                    $student->hafiz = $this->hafiz;
                    $student->referred = $this->referred;
                    $student->city = $this->city;
                    $student->current_address = $this->address1;
                    $student->permanent_address = $this->address2;
                    $student->person = $this->person;
                    $student->relation = $this->relation;
                    $student->save();

                    $latest = Student::latest()->first();
                    $this->studentid = $latest->id;
                }
                if ($this->next == false) {
                    return redirect()->route('list');
                } else {
                
                    return redirect()->route('guardian', ['id' => $this->student_id]);
                }
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
        }


    }
    public function saveNext()
    {
        try {
            $this->next = true;
            $this->saveClose();
        } catch (\Exception $e) {
            $this->message = $e->getMessage();
        }

    }

    public function guardian()
    {
        if ($this->student_id) {
            return redirect()->route('guardian', ['id' => $this->student_id]);
        }
    }

    public function academic()
    {
        if ($this->student_id) {
            return redirect()->route('academic', ['id' => $this->student_id]);
        }
    }
    public function render()
    {
        return view('livewire.student-form');

    }
}
