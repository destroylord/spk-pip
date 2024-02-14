<section data-step="Biodata Ibu">

    <h3 class="py-2 pt-2">Biodata Diri Ibu Kandung</h3>
        <hr>
        <div class="col-12 mt-3">
            <label>Nama Ibu</label>
            <input type="text" class="form-control" name="mother_name">
        </div>
        <div class="col-12 mt-3">
            <label>Pekerjaan Ibu</label>
            <input type="text" class="form-control" name="mother_occupation">
        </div>
        <div class="col-12 mt-3">
            <label>Alamat Ibu</label>
            <textarea name="mother_address" id="" cols="30" rows="2" class="form-control"></textarea>
        </div>
        <div class="col-12 mt-3">
            <label for="birth_place" class="form-label">Tempat Lahir</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="mother_birth_place"  placeholder="Bondowoso"/>
                </div>
                <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                <div class="col">
                    <input type="date" class="form-control" name="mother_birth_date" placeholder="State"/>
                </div>
                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6 text-left">
            <button class="btn btn-outline-primary" data-prev>Previous</button>
            </div>
            <div class="col-6 text-right">
            <button class="btn btn-primary" type="submit">Daftar</button>
            </div>
        </div>
</section>