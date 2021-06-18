<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Administrador de mermas
</x-slot>

<div class="py-12">
    <div class="w-12/12 max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-2 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-2 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }} </p>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue700 text-white font-bold py-2 w-auto px-2 rounded my-3">Agregar registro</button>
            @if($isOpen)
            @include('livewire.create-mermas')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 w-auto">Fecha creación</th>
                        <th class="px-2 py-2 w-auto">Analista</th>
                        <th class="px-2 py-2 w-20">Turno</th>
                        <th class="px-2 py-2 w-20">Grupo</th>
                        <th class="px-2 py-2 w-20">Maquina</th>
                        <th class="px-2 py-2 w-20">Tintas</th>
                        <th class="px-2 py-2 w-20">ODC</th>
                        <th class="px-2 py-2 w-44">Codigo</th>
                        <th class="px-2 py-2 w-auto">Producción</th>
                        <th class="px-2 py-2 w-auto">Merma</th>
                        <th class="px-2 py-2 w-auto">Rechazados</th>
                        <th class="px-2 py-2 w-auto">Motivo Descarte</th>
                        <th class="px-2 py-2 w-auto">Comentarios</th>
                        <th class="px-2 py-2 w-20">Operador</th>
                        <th class="px-2 py-2 w-auto">Confirmar</th>
                        <th class="px-2 py-2 w-auto">Editar</th>
                        <th class="text-center px-2 py-2 w-auto">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mermas as $merma)
                    <tr>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $merma->created_at }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $merma->nombre_analista }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $merma->turno }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $merma->grupo }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $merma->maquina }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $merma->tintas }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $merma->orden_produccion }}</td>
                        <td class="border px-2 py-2 w-44 text-xs md:text-base">{{ $merma->codigo_producto }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $merma->produccion }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ number_format($merma->merma,2) }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $merma->rechazados }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $merma->motivo_descarte }}</td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">{{ $merma->comentarios }}</td>
                        <td class="border px-2 py-2 w-20 text-xs md:text-base">{{ $merma->codigo_operador }}</td>
                        
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">
                            <button wire:click="edit({{ $merma->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 w-auto px-2 rounded text-xs md:text-base">Confirmar</button>
                        </td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">
                            <button wire:click="edit({{ $merma->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 w-auto px-2 rounded text-xs md:text-base">Editar</button>
                        </td>
                        <td class="border px-2 py-2 w-auto text-xs md:text-base">
                            <button wire:click="delete({{ $merma->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 w-auto px-2 rounded text-xs md:text-base">Eliminar</button>
                        </td>                           
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>