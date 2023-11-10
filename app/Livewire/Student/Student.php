<?php

namespace App\Livewire\Student;

use App\Http\Requests\StudentRequest;
use App\Livewire\Forms\StudentForm;
use App\Models\Student as ModelsStudent;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Student extends Component
{

    // public StudentForm $form;
    public $currentStep;
    public $student;
    private $stepActions = [
        'submit1',
        'submit2'
    ];

    public function mount()
    {
        $this->currentStep = 2;
    }

    public function increaseStep()
    {
        $this->currentStep++;
    }
    public function decreaseStep()
    {
        $this->currentStep--;
    }

    public function submit1()
    {
        $this->validate([
            'full_name' => ['required', 'string'],
            'gender' => ['required', 'in:Male,Female'],
            'birth_place' => ['required', 'string'],
            'birth_date' => ['required', 'date'],
            'religion' => ['required', 'string'],
            'kindergarten' => ['required', 'string'],
            'kindergarten_address' => ['required', 'string'],
            'home_address' => ['required', 'string'],
            'village' => ['required', 'string'],
            'sub_district' => ['required', 'string'],
            'regency' => ['required', 'string'],
        ]);

        if($this->student) {
            // dd(tap($this->student));
             $this->student = tap($this->student)->update($this->biodata());
            // session()->flash('message', 'Customer successfully updated.');
        } else {
            $this->student = ModelsStudent::create($this->biodata());
            // session()->flash('message', 'Student successfully created.');

        }


        $this->currentStep++;
    }

    public function submit2()
    {
        $this->validate([
            'father_name' => ['required', 'string'],
            'father_occupation' => ['required', 'string'],
            'father_address' => ['required', 'string'],
            'father_birth_place' => ['required', 'string'],
            'father_birth_date' => ['required', 'date'],
            'mother_name' => ['required', 'string'],
            'mother_occupation' => ['required', 'string'],
            'mother_address' => ['required', 'string'],
            'mother_birth_place' => ['required', 'string'],
            'mother_birth_date' => ['required', 'date'],
        ]);

        $this->student= tap($this->student)->update($this->parent());
            // session()->flash('message', 'Student successfully created.');

        $this->currentStep++;
    }


    public function save()
    {
        $action = $this->stepActions[$this->currentStep];

        $this->$action();
    }

    public function render()
    {
        return view('livewire.student.student');
    }

    /**
     * Summary of data
     * @return array
     */
    private function biodata(): array
    {
        $data = [
                'full_name' => $this->full_name,
                'gender' => $this->gender,
                'birth_place' => $this->birth_place,
                'birth_date' => $this->birth_date,
                'religion' => $this->religion,
                'kindergarten' => $this->kindergarten,
                'kindergarten_address' => $this->kindergarten_address,
                'home_address' => $this->home_address,
                'village' => $this->village,
                'sub_district' => $this->sub_district,
                'regency' => $this->regency,
        ];

        return $data;
    }
    
    private function parent(): array
    {
        $data = [
            'father_name' => $this->father_name,
            'father_occupation' => $this->father_occupation,
            'father_address' => $this->father_address,
            'father_birth_place' => $this->father_birth_place,
            'father_birth_date' => $this->father_birth_date,
            'mother_name' => $this->mother_name,
            'mother_occupation' => $this->mother_occupation,
            'mother_address' => $this->mother_address,
            'mother_birth_place' => $this->mother_birth_place,
            'mother_birth_date' => $this->mother_birth_date,
        ];

        return $data;
    }
}
