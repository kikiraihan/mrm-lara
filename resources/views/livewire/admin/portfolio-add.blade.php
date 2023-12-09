<x-slot name="stylehalaman">
    @livewireStyles
</x-slot>
<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')
</x-slot>

<main class="w-full p-4">

    <h1 class="text-3xl text-black pb-4">Tambah Portofolio</h1>
    <section class="w-full">
        
        <form wire:submit.prevent="save" enctype='multipart/form-data'>
            <div class="bg-white overflow-auto mb-6 py-3 px-6 rounded divide-y-2">

                {{-- 'judul',
                'kategori',
                'lokasi',
                'tahun',
                'luas_situs',
                'luas_lantai',
                'tinggi',
                'pic',
                'tipe',
                'cover', --}}

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">
                            Cover 
                        </h4>
                        <div class="text-gray-400 text-xs">*maksimal 1mb</div>
                        <div class="text-gray-400 text-xs">*Dimensi 1080x1080px</div>
                    </div> 
                    <div class="w-3/4 py-4 break-words"
                        x-data="{ isUploading: false, progress: 0 }"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <x-atom.form-input-standar wire:model="cover" type="file"/>
                            <x-atom.form-error-input :kolom="'cover'" />
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress" class="w-full animate-pulse"></progress>
                            </div>
                    </div>
                </div>
                @if ($cover)
                <div class="w-1/2">
                    Cover Preview:
                    <img class="w-1/2" src="{{ $cover->temporaryUrl() }}">
                </div>
                @endif

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Judul</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.judul" placeholder="judul"/>
                        <x-atom.form-error-input :kolom="'data.judul'" />
                    </div>
                </div>

                <div class="flex ">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Kategori</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-select-standar wire:model="data.kategori">
                            <option value="" hidden selected>[belum dipilih]</option>
                            @foreach ([
                                'arsitektur',
                                'interior',
                                'religion project',
                            ] as $item)
                                <option class="w-full capitalize" value='{{$item}}'>
                                    {{$item}}
                                </option>
                            @endforeach
                        </x-atom.form-select-standar>
                        <x-atom.form-error-input :kolom="'data.kategori'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Lokasi</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.lokasi" placeholder="lokasi"/>
                        <x-atom.form-error-input :kolom="'data.lokasi'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Tahun</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.tahun" placeholder="tahun" type="number"/>
                        <x-atom.form-error-input :kolom="'data.tahun'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Luas Situs</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.luas_situs" placeholder="luas situs" type="number"/>
                        <x-atom.form-error-input :kolom="'data.luas_situs'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Luas Lantai</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.luas_lantai" placeholder="luas lantai" type="number"/>
                        <x-atom.form-error-input :kolom="'data.luas_lantai'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Jumlah lantai</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.tinggi" placeholder="Jumlah lantai" type="number"/>
                        <x-atom.form-error-input :kolom="'data.tinggi'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">PIC</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.pic" placeholder="pic"/>
                        <x-atom.form-error-input :kolom="'data.pic'" />
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">Tipe</h4>
                    </div> 
                    <div class="w-3/4 py-4 break-words">
                        <x-atom.form-input-standar wire:model="data.tipe" placeholder="tipe"/>
                        <x-atom.form-error-input :kolom="'data.tipe'" />
                    </div>
                </div>

                

                <div wire:loading.delay.long wire:target='save'>
                    <x-atom.loading_fullpage-image  />
                </div>
                <div wire:loading wire:target='updatingImages'>
                    <x-atom.loading_fullpage-image  />
                </div>



            </div>
        </form>

        <div class="flex justify-end space-x-2">
            <x-atom.button-link class="p-2" :color="'zinc'"
            href="{{ route('admin.portfolio') }}">
                Kembali
            </x-atom.button-link>
            <x-atom.button-manual class="p-2" :color="'emerald'" wire:click="save">
                Simpan
            </x-atom.button-manual>
        </div>

    </section>

</main>

