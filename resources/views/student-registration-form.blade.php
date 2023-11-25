@extends('templates.app')
@section('content')
<div class="container">
  <div class="d-flex justify-conten-between">
    <div class="d-flex align-items-center">
      <h3 class="flex-grow-1">Formulir Pendaftaran</h3>
      <p class="flex-grow-1 ms-3">asdasdjaldlawdljalkasjdlksaj</p>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-lg-10 col-sm-12">
      <form action="#" wire:submit.prevent="save">
        <h1 class="h3">Biodata Diri</h1>
        <div class="row">
            <div class="col-12 mt-4">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input id="fullname" class="form-control" placeholder="John Doe" type="text" name="fullname" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
            </div>
            <div class="col-12 mt-2">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" name="gender" value="L" class="form-check-input">
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="P" class="form-check-input">
                    <label class="form-check-label">Perempuan</label>
                </div>
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>
            <div class="col-12 mt-2">
                <label for="birth_place" class="form-label">Tempat Lahir</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control"  placeholder="Bondowoso"/>
                    </div>
                    <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                    <div class="col">
                        <input type="date" class="form-control" placeholder="State"/>
                    </div>
                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                </div>
            </div>
            <div class="col-12 mt-2">
                <label for="religion" class="form-label">Agama</label>
                <select class="form-select">
                    <option selected disabled>Open this select menu</option>
                    <option value="1">Islam</option>
                    <option value="2">Khatolik</option>
                    <option value="3">Hindu</option>
                    <option value="4">Budha</option>
                    <option value="5">Konghucu</option>
                </select>
                <x-input-error :messages="$errors->get('religion')" class="mt-2" />
            </div>
        </div>
       
    </div>
  </div>
</div>
  
@endsection