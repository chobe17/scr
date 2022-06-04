<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Administrador de ordenes de produccion
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

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Agregar Orden de Produccion</button>
            @if($isOpen)
            @include('livewire.create-ordenes-produccion')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-2/12">O/P</th>
                        <th class="px-4 py-2 w-2/12">Nombre producto</th>
                        <th class="px-4 py-2 w-5/12">Descripción</th>
                        <th class="px-4 py-2 w-3/12">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ordenes_produccion as $orden_produccion)
                    <tr>
                        <td class="border px-4 py-2 w-2/12">{{ $orden_produccion->numero_orden }}</td>
                        <td class="border px-4 py-2 w-2/12">{{ $orden_produccion->codigo_producto }}</td>
                        <td class="border px-4 py-2 w-5/12">{{ $orden_produccion->descripcion_producto }}</td>
                        <td class="border flex px-4 w-auto justify-around py-2">
                            <button wire:click="edit({{ $orden_produccion->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-xs md:text-base">Editar</button>
                            <button wire:click="delete({{ $orden_produccion->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs md:text-base">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>