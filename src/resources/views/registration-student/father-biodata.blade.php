<section data-step="Biodata Ayah">
    <h3 class="py-2 pt-2">Biodata Diri Ayah Kandung</h3>
        <hr>
    <div class="col-12 mt-3">
        <label>Nama Ayah</label>
        <input type="text" class="form-control" name="father_name">
    </div>
    <div class="col-12 mt-3">
        <label>Pekerjaan Ayah</label>
        <input type="text" class="form-control" name="father_occupation">
    </div>
    <div class="col-12 mt-3">
        <label>Alamat Ayah</label>
        <textarea name="father_address" id="" cols="30" rows="2" class="form-control"></textarea>
    </div>
    <div class="col-12 mt-3">
        <label for="birth_place" class="form-label">Tempat Lahir</label>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="father_birth_place" placeholder="Bondowoso"/>
            </div>
            <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
            <div class="col">
                <input type="date" class="form-control" name="father_birth_date" placeholder="State"/>
            </div>
            <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-6 text-left">
        <button class="btn btn-outline-primary" data-prev>Previous</button>
        </div>
        <div class="col-6 text-right">
        <button class="btn btn-primary" data-next>Next</button>
        </div>
    </div>
</section>