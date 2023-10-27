<?php

namespace App\Livewire;

use Livewire\Component;

class FormGenerator extends Component
{

    public $inputs;
    public $i;

    public function mount()
    {
        $this->inputs = [];
        $this->i = 1;
    }

    public function add($i) 
    {
        $this->i = $i + 1;
        array_push($this->inputs, $i);
    }

    public function remove($key)
    {
        unset($this->inputs[$key]);
    }

//   public function store()
//     {
//         $validatedDate = $this->validate([
//                 'account.0' => 'required',
//                 'username.0' => 'required',
//                 'account.*' => 'required',
//                 'username.*' => 'required',
//             ],
//             [
//                 'account.0.required' => 'Account field is required',
//                 'username.0.required' => 'Username field is required',
//                 'account.*.required' => 'Account field is required',
//                 'username.*.required' => 'Username field is required',
//             ]
//         );
   
//         foreach ($this->account as $key => $value) {
//             Account::create(['account' => $this->account[$key], 'username' => $this->username[$key]]);
//         }
  
//         $this->inputs = [];
   
//         $this->resetInputFields();
   
//         session()->flash('message', 'Account Added Successfully.');
//     }

    public function render()
    {
        return view('livewire.form-generator')
                ->layout('layouts.app');
    }
}
