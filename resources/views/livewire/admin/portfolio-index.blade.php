<x-slot name="stylehalaman">
    @livewireStyles
</x-slot>

<x-slot name="scripthalaman">
    @livewireScripts
    @include('layouts.scriptsweetalert')
</x-slot>


<main class="w-full p-4">
    <h1 class="text-3xl">Portfolio</h1>
    <span class="text-sm">Ini portfolio</span>
    
    <div class="w-full pt-4">
        <div class="grid grid-cols-4 items-center">
            <div class="flex p-2 space-x-1 col-span-2">
                <button class="w-auto flex justify-end items-center text-gray-500 p-2 hover:text-gray-400">
                    <i class="fas fa-search mr-3"></i>
                </button>
                <x-atom.form-input-standar placeholder="Search" type="text" wire:model.debounce.500ms="search" class="w-full rounded p-2" />
            </div>

            <div class="text-right col-span-2 pr-2">
                <x-atom.link-table-only-faicon icon="fas fa-plus" 
                    warna="emerald" class="px-2 py-1" 
                    href="{{ route('admin.portfolio.add') }}"/>
            </div>
        </div>

        @if ($isiTabel->isEmpty())
            <x-atom.empty-table/>
        @else
        <div class="bg-white overflow-auto rounded">
            <table class="min-w-full bg-white">
                <thead class="bg-sky-700 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Created at</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Judul</th>
                        <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Kategori</th>
                        <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Gambar</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($isiTabel as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{$item->created_at->format('Y-m-d')}}</td>
                        <td class="text-left py-3 px-4">{{$item->judul}}</td>
                        <td class="text-center py-3 px-4">{{$item->kategori}}</td>
                        <td class="flex py-3 px-4 justify-center">
                            <img src="{{ $item->CoverIfNullReturnTemplate }}" alt="" class="w-40">
                        </td>
                        <td class="text-left py-3 px-4">
                            <x-atom.button-table-only-faicon icon="fas fa-trash" warna="red" class="px-2 py-1 float-right" wire:click="$emit('swalToDeleted','FixHapusPortfolio','{{$item->id}}')"/>
                            <x-atom.link-table-only-faicon icon="fas fa-eye" warna="blue" class="px-2 py-1" href="{{ route('admin.portfolio.detail', ['id'=>$item->id]) }}"/>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-3 py-2">
                {{ $isiTabel->links() }}
            </div>
        </div>
        @endif
    </div>
</main>
