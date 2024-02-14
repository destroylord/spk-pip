<?php

use function Livewire\Volt\{state, layout, computed, rules, boot};
use App\Models\Criteria;


layout('layouts.app');

state([
    'criterias' => Criteria::all(),
    'addSubCriteria' => 0,
    'elementSubCriteria' => Criteria::pluck('id')
]);

$add = function($id) {

    dd($this->elementSubCriteria->filter($id));
    // $this->addSubCriteria = $id;
    // $element = $this->elementSubCriteria;

    // if ($element[$id] == null) {
    //     $this->elementSubCriteria[$id] = [1];
    
    //     return;
    // }

    // array_push($this->elementSubCriteria[$id], $id);
}

?>


<div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Sub-Kriteria</h4>
                
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <p>Tambahkan sesuai kriteria yang diinginkan sehingga menjadikan kriteria tersebut menjadi akurat dalam perhitungan.
                        </p>
                    </div>
                
                    <div class="col-lg-12">
                        <form action="#">
                            @foreach ($this->criterias as $criteria)
                                <ul>
                                    <li style="list-decoration:none">
                                        <div class="d-flex justify-content-between mb-4">
                                            {{ $criteria->name }}  <button class="btn btn-success" wire:click.prevent="add({{$criteria->id}})">+</button>
                                        </div>
                                    </li>
                                    <ul>
                                        @if ($this->addSubCriteria == $criteria->id)
                                            @foreach($this->elementSubCriteria[$criteria->id] as $key => $value)
                                                <li>
                                                    <div class="d-flex gap-2">
                                                        <input type="text" placeholder="Nama Sub-Kriteria" class="form-control">
                                                        <input type="text" placeholder="Bobot Kriteria, Contoh: 5" class="form-control">
                                                        <button class="btn btn-danger" wire:click.prevent="remove({{$key}})">-</button>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                       
                                    </ul>
                                </ul>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
