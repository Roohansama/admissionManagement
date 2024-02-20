<?php

namespace App\Livewire;

use App\Models\Guardian;
use App\Models\Student;
use App\Models\StudentGuardian;
use Livewire\Component;


class GuardiansForm extends Component
{
    public $relation, $name, $occupation, $organization, $designation, $income, $cnic, $mobile, $whatsapp, $address;

    public $student_id, $guardian_id;

    public $g_id;

    public $stu;

    public $message;

    protected $rules = [
        'relation' => 'required',
        'name' => 'required',
        'cnic' => 'required',
        'mobile' => 'required',
        'whatsapp' => 'required',
    ];
    protected $messages = [
        'relation'=> 'Please Select relation with guardian',
        'name'=> 'Please enter guardian name',
        'cnic'=> 'Please enter guardian cnic',
        'mobile'=> 'Pleae enter guardian mobile number',
    ];

    public function mount($id)
    {
        $this->student_id = $id;
        $this->stu = Student::find($this->student_id);
        if($this->stu == null)
        {
            return redirect()->route('student');
        }

    }
    public function saveClose()
    {
        $this->validate();
        try{
            if ($this->g_id) {
                $guardian = Guardian::find($this->g_id);
                $guardian->name = $this->name;
                $guardian->relation = $this->relation;
                $guardian->occupation = $this->occupation;
                $guardian->organization = $this->organization;
                $guardian->designation = $this->designation;
                $guardian->income = $this->income;
                $guardian->cnic = $this->cnic;
                $guardian->mobile = $this->mobile;
                $guardian->whatsapp = $this->whatsapp;
                $guardian->address = $this->address;
                $guardian->save();
    
            } else {
                $guardian = new Guardian;
                $guardian->name = $this->name;
                $guardian->relation = $this->relation;
                $guardian->occupation = $this->occupation;
                $guardian->organization = $this->organization;
                $guardian->designation = $this->designation;
                $guardian->income = $this->income;
                $guardian->cnic = $this->cnic;
                $guardian->mobile = $this->mobile;
                $guardian->whatsapp = $this->whatsapp;
                $guardian->address = $this->address;
                $guardian->save();
    
                $latest = Guardian::latest()->first();
                $this->guardian_id = $latest->id;
    
                $save_relation = new StudentGuardian;
                $save_relation->student_id = $this->student_id;
                $save_relation->guardian_id = $this->guardian_id;
    
                $save_relation->save();
            }
    
        
        }catch(\Exception $e){
          $this->message =  $e->getMessage();
        }
        
    }

    public function saveNext()
    {
        $this->validate();
        try{

            if ($this->g_id) {
                $guardian = Guardian::find($this->g_id);
                $guardian->name = $this->name;
                $guardian->relation = $this->relation;
                $guardian->occupation = $this->occupation;
                $guardian->organization = $this->organization;
                $guardian->designation = $this->designation;
                $guardian->income = $this->income;
                $guardian->cnic = $this->cnic;
                $guardian->mobile = $this->mobile;
                $guardian->whatsapp = $this->whatsapp;
                $guardian->address = $this->address;
                $guardian->save();
    
            } else {
                $guardian = new Guardian;
                $guardian->name = $this->name;
                $guardian->relation = $this->relation;
                $guardian->occupation = $this->occupation;
                $guardian->organization = $this->organization;
                $guardian->designation = $this->designation;
                $guardian->income = $this->income;
                $guardian->cnic = $this->cnic;
                $guardian->mobile = $this->mobile;
                $guardian->whatsapp = $this->whatsapp;
                $guardian->address = $this->address;
                $guardian->save();
    
                $latest = Guardian::latest()->first();
                $this->guardian_id = $latest->id;
    
                $save_relation = new StudentGuardian;
                $save_relation->student_id = $this->student_id;
                $save_relation->guardian_id = $this->guardian_id;
    
                $save_relation->save();
            }
            return redirect()->route('academic', ['id' => $this->student_id]);
    
        }catch(\Exception $e){
            $this->message =  $e->getMessage();
        }
        
    }

    public function editGuardian($id)
    {
        try{
            $this->g_id = $id;
            $guardian = Guardian::find($this->g_id);
            $this->name = $guardian->name;
            $this->relation = $guardian->relation;
            $this->occupation = $guardian->occupation;
            $this->organization = $guardian->organization;
            $this->designation = $guardian->designation;
            $this->income = $guardian->income;
            $this->cnic = $guardian->cnic;
            $this->mobile = $guardian->mobile;
            $this->whatsapp = $guardian->whatsapp;
            $this->address = $guardian->address;
        }catch(\Exception $e){
            $this->message =  $e->getMessage();
        }
    }
    public function deleteGuardian($id){
        try{
            Guardian::find($id)->delete();
        }
        catch(\Exception $e)
        {

        }
    }
    public function student()
    {
        return redirect()->route('student');
    }
  
    public function academic()
    {
        if ($this->student_id) {
            return redirect()->route('academic', ['id' => $this->student_id]);
        }
    }

    public function render()
    {
        return view('livewire.guardians-form');
    }
}
