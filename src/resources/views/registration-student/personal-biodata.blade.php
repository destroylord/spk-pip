 <section data-step="Biodata">   
    <div class="row">
        <div class="col-12 mt-4">
            <label for="fullname" class="form-label">Nama Lengkap</label>
            <input id="full_name" class="form-control" placeholder="John Doe" type="text" name="full_name" autofocus autocomplete="name"/>
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
                    <input type="text" class="form-control" name="birth_place"  placeholder="Bondowoso"/>
                </div>
                <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                <div class="col">
                    <input type="date" class="form-control" name="birth_date" placeholder="State"/>
                </div>
                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
            </div>
        </div>
        <div class="col-12 mt-3">
            <label for="religion" class="form-label">Agama</label>
            <select class="form-select" name="religion">
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
                    <input type="text" class="form-control" name="kindergarten">
                    <x-input-error :messages="$errors->get('asal_tk')" class="mt-2" />
                </div>
                <div class="col">
                    <label for="">Alamat TK</label>
                    <textarea name="kindergarten_address" id="" cols="30" rows="2" class="form-control"></textarea>
                    <x-input-error :messages="$errors->get('alamat_tk')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <label for="address" class="form-label">Alamat Siswa</label>
            <textarea class="form-control" id="address" rows="3" name="home_address"></textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        {{-- <input type="text" name="village" class="form-control"> --}}

    </div>

     <div class="row mt-4">
        <div class="col-12 text-right">
        <button class="btn btn-primary" data-next>Next</button>
    </div>
    </div>
</section>