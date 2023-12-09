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
    </h1>
    <section class="w-full">

        <div class="bg-white overflow-auto mb-6 py-3 px-6 rounded ">

            <div class="flex justify-end">
                <x-atom.link-table-only-faicon icon="fas fa-edit" warna="yellow" class="px-2 py-1"
                    href="{{ route('admin.portfolio.edit', ['id'=>$prt->id]) }}" />
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">
                        Cover
                    </h4>
                    <div class="text-gray-400 text-xs">*maksimal 1mb</div>
                    <div class="text-gray-400 text-xs">*Dimensi 1080x1080px</div>
                </div>
                <div class="w-3/4 py-4 break-words">
                    @if ($prt->cover)
                    <div class="w-1/2">
                        <img src="{{ $prt->cover }}">
                    </div>
                    @endif
                </div>
            </div>


            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Judul</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->judul}}</p>
                </div>
            </div>

            <div class="flex border-b ">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Kategori</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->kategori}}</p>
                </div>
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Lokasi</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->lokasi}}</p>
                </div>
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Tahun</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->tahun}}</p>
                </div>
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Luas Situs</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->luas_situs}}</p>
                </div>
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Luas Lantai</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->luas_lantai}}</p>
                </div>
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Tinggi</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->tinggi}} Lantai</p>
                </div>
            </div>

            <div class="flex border-b">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">PIC</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->pic}}</p>
                </div>
            </div>

            <div class="flex">
                <div class="w-1/4 py-4">
                    <h4 class="font-normal text-80">Tipe</h4>
                </div>
                <div class="w-3/4 py-4 break-words">
                    <p class="font-normal text-80">{{$prt->tipe}}</p>
                </div>
            </div>


        </div>

    </section>


    {{-- images --}}
    <h1 class="text-xl text-black mt-8 pb-2">#Images</h1>
    <section class="w-full">

        <div class="text-right col-span-2 pr-2 mb-2">
            <x-atom.link-table-only-faicon icon="fas fa-plus" warna="emerald" class="px-2 py-1"
                href="{{ route('admin.portfolio.add.gambar', ['id'=>$prt->id]) }}" />
        </div>

        @if ($gambar->isEmpty())
        <x-atom.empty-table />
        @else
        <div class=" overflow-auto rounded">
            
            {{-- <table class="min-w-full bg-white">
                    <thead class="bg-sky-700 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Pilih Gambar</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Type</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($gambar as $item)
                        <tr>
                            <td class="text-left py-3 px-4">
                                <x-atom.button-table-image :w='40' src="{{$item->images}}"  wire:click="$emit('swalShowImage','{{$item->images}}')"/>
                            </td>
                            <td class="text-left py-3 px-4">{{$item->type}}</td>
                            <td class="text-left py-3 px-4">
                                <x-atom.button-table-only-faicon icon="fas fa-trash" 
                                    warna="red" class="px-2 py-1 float-right" 
                                    wire:click="hapusGambar('{{$item->id}}')"/>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> --}}

            <div class="grid grid-cols-4 gap-4">
                @foreach ($gambar as $item)
                <div class="max-w-sm rounded overflow-hidden ">
                    <img class="w-full" src="{{$item->path}}" alt="Sunset in the mountains">
                    <div class="text-sm p-1 text-gray-500 bg-white  flex items-center space-x-1 justify-between">
                        <div>
                            <i class="fas fa-calendar text-xs text-gray-400"></i>
                            <span>{{$item->created_at->format('Y m d')}}</span>
                        </div>
                        <x-atom.badge class="bg-gray-200">{{$item->id_portfolio}}</x-atom.badge>
                    </div>
                    <div class="flex justify-end space-x-2 p-1 bg-white ">
                        <x-atom.button-table-only-faicon icon="fas fa-trash" warna="red"
                            class="flex-auto justify-center px-4 py-2 float-right"
                            wire:click="$emit('swalToDeleted','FixHapusGambar',{{$item->id}})" />
                        <x-atom.button-table-only-faicon icon="fas fa-image" warna="blue"
                            class="flex-auto justify-center px-4 py-2"
                            wire:click="$emit('swalShowImage','{{$item->path}}')" />
                    </div>
                </div>
                @endforeach
            </div>

            <div class="px-3 py-2">
                {{ $gambar->links() }}
            </div>
        </div>
        @endif
    </section>

    <div class="flex justify-end space-x-2 mt-4">
        <x-atom.button-link class="p-2" :color="'zinc'"
        href="{{ route('admin.portfolio') }}">
            Kembali
        </x-atom.button-link>
    </div>

</main>
