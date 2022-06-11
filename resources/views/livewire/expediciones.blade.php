<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Expediciones 
</x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-2 py-4 overflow-x-auto">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-2 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }} </p>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 w-auto px-2 rounded my-3">Agregar registro</button>
<!--
            <a href="/imprimir-merma "><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded my-3">Exportar a PDF</button></a>

            <a href="/exportar-merma "><button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3">Exportar a Excel</button></a>
-->
            <br>
            <label for="consulta" class="block text-gray-700 text-sm font-bold mb-2">Buscar:</label>
            <input type="text" wire:model="consulta" class="appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg">
            <br><br>
            @if($isOpen)
            @include('livewire.create-expedicion')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    
                    <tr class="bg-gray-100">
                        
                        @foreach($columns as $c)
                        <th class="px-4 py-2" wire:click="sort('{{ $c }}')">
                            
                                @if($c == "created_at")
                                <button><b>Fecha</b></button>

                                @elseif($c == "numero_factura")
                                <button><b>Numero de factura</b></button>
                                                                
                                @elseif($c == "odc")
                                <button><b>ODC</b></button>
                                
                                @elseif($c == "codigo_producto")
                                <button><b>Codigo</b></button>

                                @elseif($c == "descripcion_producto")
                                <button><b>Descripcion</b></button>

                                @elseif($c == "cantidad_pallets")
                                <button><b>Pallets</b></button>

                                @elseif($c == "total_cajas")
                                <button><b>Cajas</b></button>

                                @elseif($c == "total_piezas")
                                <button><b>Piezas</b></button>

                                @else
                                <button><b>{{ $c }}</b></button>
                                @endif

                            @if($sortColumn == $c)
                                @if($sortDirection == 'asc')
                                    <button>&uarr;</button>
                                @else
                                    <button>&darr;</button>
                                @endif
                            @endif
                        </th>
                        @endforeach
                        <th class="px-2 py-2 w-auto">Editar</th>
                        <th class="text-center px-2 py-2 w-auto">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expediciones as $expedicion)
                    <tr>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $expedicion->created_at }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $expedicion->numero_factura }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $expedicion->odc }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $expedicion->codigo_producto }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $expedicion->descripcion_producto }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $expedicion->clave }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $expedicion->cantidad_pallets }}</td>
                        <td class="border px-2 py-2 w-44 text-xs md:text-base">{{ $expedicion->total_cajas }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $expedicion->total_piezas }}</td>

                        <td class="justify-center border px-2 py-2 w-auto text-xs md:text-base">
                            <button wire:click="edit({{ $expedicion->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 w-auto px-2 rounded text-xs md:text-base">Editar</button>
                        </td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">
                            <button wire:click="delete({{ $expedicion->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 w-auto px-2 rounded text-xs md:text-base">Eliminar</button>
                        </td>                           
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>