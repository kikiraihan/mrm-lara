<x-slot name="stylehalaman">
    @livewireStyles
</x-slot>
<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')
</x-slot>

<main class="w-full p-4">

    <h1 class="text-3xl text-black pb-4">
        <span>Portofolio</span>
        <span class="text-gray-500 text-base"> / </span>
        <span class="text-gray-500 text-xl">Detail </span>
        <span class="text-gray-500 text-base"> / </span>
        <span class="text-gray-500 text-xl">Add Gambar </span>
    </h1>
    <section class="w-full">
        
        <form wire:submit.prevent="save" enctype='multipart/form-data'>
            <div class="bg-white overflow-auto mb-6 py-3 px-6 rounded divide-y-2">

                <div class="flex">
                    <div class="w-1/4 py-4">
                        <h4 class="font-normal text-80">
                            Gambar
                        </h4>
                        <div class="text-gray-400 text-xs">*maksimal 1mb</div>
                        <div class="text-gray-400 text-xs">*Dimensi 1920x1080px</div>
                    </div> 
                    <div class="w-3/4 py-4 break-words"
                        x-data="{ isUploading: false, progress: 0 }"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <x-atom.form-input-standar wire:model="image" type="file"/>
                            <x-atom.form-error-input :kolom="'image'" />
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress" class="w-full animate-pulse"></progress>
                            </div>
                    </div>
                </div>
                @if ($image)
                <div class="w-1/2">
                    Image Preview:
                    <img class="w-1/2" src="{{ $image->temporaryUrl() }}">
                </div>
                @endif


                

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
            href="{{ route('admin.portfolio.detail',['id'=>$idPort]) }}">
                Kembali
            </x-atom.button-link>
            <x-atom.button-manual class="p-2" :color="'emerald'" wire:click="save">
                Simpan
            </x-atom.button-manual>
        </div>

    </section>

</main>

