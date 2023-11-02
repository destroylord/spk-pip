<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\StudentForm;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Student extends Component
{
    public StudentForm $form;

    public function save()
    {
        dd($this->form);
        $this->form->store();

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.student.student');
    }
}
