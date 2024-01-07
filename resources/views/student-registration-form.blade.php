@extends('templates.app')
@section('content')
<div class="container">
  <div class="d-flex justify-conten-between p-4">
    <div class="d-flex align-items-center">
      <h3 class="flex-grow-1">Formulir Pendaftaran</h3>
      <small class="flex-grow-1 ms-3">Bergabunglah dengan kami! Isi formulir pendaftaran siswa baru untuk memulai perjalanan pendidikan yang menarik. Dengan fasilitas modern dan kurikulum inovatif, kami membuka pintu untuk pertumbuhan akademis dan perkembangan pribadi Anda. Segera daftar dan jadilah bagian dari komunitas pendidikan yang inspiratif</small>
    </div>
  </div>
  <div class="row d-flex justify-content-center mt-5">
    <div class="col-lg-10 col-sm-12">
      <form action="#">
        <h3 class="text-mute">Biodata Diri</h3>
        <hr>
        <div class="row">
            <div class="col-12 mt-4">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input id="fullname" class="form-control" placeholder="John Doe" type="text" name="fullname" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
            </div>
            <div class="col-12 mt-3">
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
            <div class="col-12 mt-3">
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
            <div class="col-12 mt-3">
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
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col">
                        <label for="">Asal TK</label>
                        <input type="text" class="form-control">
                        <x-input-error :messages="$errors->get('asal_tk')" class="mt-2" />
                    </div>
                    <div class="col">
                        <label for="">Alamat TK</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                        <x-input-error :messages="$errors->get('alamat_tk')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <label for="address" class="form-label">Alamat Siswa</label>
                <textarea class="form-control" id="address" rows="3"></textarea>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
        </div>
       <h3 class="py-2 pt-2">Biodata Diri Ayah Kandung</h3>
        <hr>
        <div class="col-12 mt-3">
            <label>Nama Ayah</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12 mt-3">
            <label>Pekerjaan Ayah</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12 mt-3">
            <label>Alamat Ayah</label>
            <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
        </div>
        <div class="col-12 mt-3">
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
        <h3 class="py-2 pt-2">Biodata Diri Ibu Kandung</h3>
        <hr>
        <div class="col-12 mt-3">
            <label>Nama Ibu</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12 mt-3">
            <label>Pekerjaan Ibu</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12 mt-3">
            <label>Alamat Ibu</label>
            <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
        </div>
        <div class="col-12 mt-3">
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
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </div>
  </div>
</div>
  
@endsection