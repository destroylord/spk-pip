<form action="#" wire:submit.prevent="save">
    @if ($currentStep === 1)
    <h1 class="text-xl">Biodata Diri</h1>
    <div class="grid gap-4">
        <div class="mt-4">
            <x-input-label for="fullname">Nama Lengkap</x-input-label>
            <x-text-input wire:model="full_name" id="fullname" class="block mt-1 w-full" placeholder="John Doe" type="text" name="fullname" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="gender">Jenis Kelamin</x-input-label>
            <input type="radio" name="gender" wire:model="gender" value="L">
            <span class="ml-2 mr-4">Laki-laki</span>
            <input type="radio" name="gender" wire:model="gender" value="P">
            <span class="ml-2">Perempuan</span>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label>Tempat Lahir</x-input-label>
            <div class="flex flex-row justify-content-between gap-4">
                <div class="basis-1/2">
                    <x-text-input type="text" class="block mt-1 w-full" wire:model="birth_place"  placeholder="Bondowoso"/>
                </div>
                <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                <div class="basis-1/4">
                    <x-text-input type="date" class="block mt-1 w-full" wire:model="birth_date" placeholder="State"/>
                </div>
                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
            </div>
        </div>
        <div class="mt-2">
            <x-input-label for="religion">Agama</x-input-label>
            <select wire:model="religion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option selected disabled>Open this select menu</option>
                <option value="1">Islam</option>
                <option value="2">Khatolik</option>
                <option value="3">Hindu</option>
                <option value="4">Budha</option>
                <option value="5">Konghucu</option>
            </select>
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-2">
                <x-input-label>Asal TK</x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" wire:model="kindergarten" placeholder="TK ABA 2 Bondowoso"/>
                <x-input-error :messages="$errors->get('kindergarten')" class="mt-2" />
            </div>
            <div class="mt-2">
                <x-input-label for="kindergarten_address">Alamat TK</x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" wire:model="kindergarten_address" placeholder="Jln.Panjaitan Tamansari Bondowoso RT.02 RW.08"/>
                <x-input-error :messages="$errors->get('kindergarten_address')" class="mt-2" />
            </div>
        </div>
        <div class="mt-2">
            <x-input-label>Alamat Siswa saat ini</x-input-label>
            <x-text-input name="" wire:model="home_address"  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('home_address')" class="mt-2" />
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="mt-2">
                <x-input-label for="village">Kelurahan/Desa</x-input-label>
                <x-text-input name="" wire:model="village" class="block mt-1 w-full"/>
                <x-input-error :messages="$errors->get('village')" class="mt-2" />
            </div>
            <div class="mt-2">
                <x-input-label for="sub_district">Kecamatan</x-input-label>
                <x-text-input wire:model="sub_district" class="block mt-1 w-full"/>
                <x-input-error :messages="$errors->get('sub_district')" class="mt-2" />
            </div>
            <mt-2>
                <x-input-label for="regency">Kabupaten</x-input-label>
                <x-text-input wire:model="regency" class="block mt-1 w-full"/>
                <x-input-error :messages="$errors->get('regency')" class="mt-2" />
            </mt-2>
        </div>
        @endif

        @if ($currentStep === 2)
        {{-- data ayah component --}}
        <hr>
        <h1 class="text-xl font-bold">Data Ayah</h1>
        <div class="mt-4">
            <x-input-label for="father_name">Nama</x-input-label>
            <x-text-input wire:model="father_name" class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('father_name')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="father_occupation">Pekerjaan</x-input-label>
            <x-text-input wire:model="father_occupation" class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('father_occupation')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label>Alamat</x-input-label>
            <x-text-input wire:model="father_address" class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('father_address')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="place_birth">Tempat Lahir</x-input-label>
            <div class="flex flex-row justify-content-between gap-4">
                <div class="basis-1/2">
                    <x-text-input type="text" class="block mt-1 w-full" wire:model="place_birth_father" placeholder="Bondowoso"/>
                </div>
                <x-input-error :messages="$errors->get('ather_birth_place')" class="mt-2" />
                <div class="basis-1/4">
                    <x-text-input type="date" class="block mt-1 w-full" wire:model="father_birth_date" placeholder="State"/>
                </div>
                <x-input-error :messages="$errors->get('father_birth_date')" class="mt-2" />
            </div>
        </div>
        {{-- data ibu component --}}
        <h1 class="text-xl font-bold">Data Ibu</h1>
        <div class="mt-4">
            <x-input-label for="mother_name">Nama</x-input-label>
            <x-text-input wire:model="mother_name" class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('mother_name')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="mother_occupation">Pekerjaan</x-input-label>
            <x-text-input wire:model="mother_occupation" class="block mt-1 w-full" placeholder="Ibu Rumah Tangga"/>
            <x-input-error :messages="$errors->get('mother_occupation')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="">Alamat</x-input-label>
            <x-text-input wire:model="mother_address" class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('mother_address')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="place_birth">Tempat Lahir</x-input-label>
            <div class="flex flex-row justify-content-between gap-4">
                <div class="basis-1/2">
                    <x-text-input type="text" class="block mt-1 w-full" wire:model="mother_birth_place" placeholder="Bondowoso"/>
                </div>
                <x-input-error :messages="$errors->get('mother_birth_place')" class="mt-2" />
                <div class="basis-1/4">
                    <x-text-input type="date" class="block mt-1 w-full" wire:model="mother_birth_date" placeholder="State"/>
                </div>
                <x-input-error :messages="$errors->get('mother_birth_date')" class="mt-2" />
            </div>
        </div>
        @endif
    </div>

    <div class="flex justify-start mt-4">

        @if ($currentStep > 0 && $currentStep <= 2)
        <button wire:click="decreaseStep" class="mr-4 disabled inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">Kembali</button>
        @endif

        @if ($currentStep <= 2)
        <button type="submit" class="disabled inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">Next</button>
        @endif
    </div>

    <div wire:loading> 
        Saving post...
    </div>
</form>
