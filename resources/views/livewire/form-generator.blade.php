
<div>
    
    <div class="card">
        <div class="card-header">
            <button wire:click="add({{ $i }})" class="btn btn-primary"> Add</button>
        </div>
            <div class="card-body">
                @foreach ($inputs as $key => $value)
                <div class="row mt-4">
                    <div class="col-lg-2">
                        <input type="text" wire:model="name.{{ $value }}" placeholder="Masukkan Label" class="form-control form-control-lg">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" placeholder="Masukkan Name" class="form-control form-control-lg">
                    </div>
                    <div class="col-lg-2">
                    <select name="type" id="" class="form-control form-control-lg">
                        <option value="">Pilih</option>
                        <option value="text">text</option>
                        <option value="select">select</option>
                        <option value="radio">radio</option>
                        <option value="checkbox">checkbox</option>
                    </select>
                    </div>
                    <div class="col-lg-2">   
                        <select name="attribute" id="" class="form-control form-control-lg">
                            <option value="">Pilih</option>
                            <option value="cost">Cost</option>
                            <option value="benefit">Benefit</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" placeholder="Masukkan Nilai Kriteria" class="form-control form-control-lg">
                    </div>

                    <div class="col-lg-2">
                        <button wire:click="remove({{ $key }})" class="btn btn-danger">Remove</button>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Generate</button>
            </div>
        </div>
</div>