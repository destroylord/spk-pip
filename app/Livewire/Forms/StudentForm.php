<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\Form;

class StudentForm extends Form
{

    #[Rule('required')]
    public $fullname;

    #[Rule('required')]
    public $gender;

    #[Rule('required')]
    public $placeOfBirth;

    #[Rule('required')]
    public $dateOfBirth;

    #[Rule('required')]
    public $homeAddress;

    #[Rule('required')]
    public $religion;

    #[Rule('required')]
    public $kindergarten;

    #[Rule('required')]
    public $kindergartenAddress;

    #[Rule('required')]
    public $village;

    #[Rule('required')]
    public $subdistrict;

    #[Rule('required')]
    public $regency;

    #[Rule('required')]
    public $fatherName;

    #[Rule('required')]
    public $fatherOccupation;

    #[Rule('required')]
    public $fatherAddress;

    #[Rule('required')]
    public $fatherBirthPlace;

    #[Rule('required')]
    public $fatherBirthDate;

    #[Rule('required')]
    public $motherName;

    #[Rule('required')]
    public $motherOccupation;

    #[Rule('required')]
    public $motherAddress;

    #[Rule('required')]
    public $motherBirthPlace;

    #[Rule('required')]
    public $motherBirthDate;

    public function store()
    {
        Student::create($this->all());
    }

}
