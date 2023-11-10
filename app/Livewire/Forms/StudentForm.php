<?php

namespace App\Livewire\Forms;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\Form;

class StudentForm extends Form
{

    #[Rule('required')]
    public $full_name;

    #[Rule('required')]
    public $gender;

    #[Rule('required')]
    public $birth_place;

    #[Rule('required')]
    public $birth_date;

    #[Rule('required')]
    public $home_address;

    #[Rule('required')]
    public $religion;

    #[Rule('required')]
    public $kindergarten;

    #[Rule('required')]
    public $kindergarten_address;

    #[Rule('required')]
    public $village;

    #[Rule('required')]
    public $sub_district;

    #[Rule('required')]
    public $regency;

    #[Rule('required')]
    public $father_name;

    #[Rule('required')]
    public $father_occupation;

    #[Rule('required')]
    public $father_address;

    #[Rule('required')]
    public $father_birth_place;

    #[Rule('required')]
    public $father_birth_date;

    #[Rule('required')]
    public $mother_name;

    #[Rule('required')]
    public $mother_occupation;

    #[Rule('required')]
    public $mother_address;

    #[Rule('required')]
    public $mother_birth_place;

    #[Rule('required')]
    public $mother_birth_date;

}
