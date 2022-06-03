<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Seguimiento de mermas
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }} </p>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue800 text-white font-bold py-2 px-4 rounded my-3">Agregar registro</button>
            @if($isOpen)
            @include('livewire.create-seguimientos')
            @endif
            
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        
                        @foreach($columns as $c)
                        <th class="px-4 py-2" wire:click="sort('{{ $c }}')">
                            <button>
                                {{ $c }}
                            </button>
                            @if($sortColumn == $c)
                                @if($sortDirection == 'asc')
                                    <button>&uarr;</button>
                                @else
                                    <button>&darr;</button>
                                @endif
                            @endif
                        </th>
                        @endforeach

                        <th class="px-4 py-2">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seguimientos as $seguimiento)
                    <tr>
                        <td class="border px-4 py-2">{{ $seguimiento->created_at }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->turno }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->maquina }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->merma }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->motivo_descarte }}</td>
                        <td class="border px-4 py-2">{{ $seguimiento->comentarios }}</td>
                        <td class="border flex px-4 w-auto justify-around py-2">
                            <button wire:click="edit({{ $seguimiento->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button wire:click="delete({{ $seguimiento->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>