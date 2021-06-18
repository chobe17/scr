<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
		Administrador de lineas de produccion
	</h2>
</x-slot>

<div class="py-12">
	<div class="w-11/12 max-w-7x1 mx-auto sm:px-6 lg:px-8">
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

			<button wire:click="create()" class="bg-blue-500 hover:bg-blue700 text-white font-bold py-2 px-4 rounded my-3">Agregar linea</button>
			@if($isOpen)
			@include('livewire.create-lineas')
			@endif

			<table class="table-fixed w-full">
				<thead>
					<tr class="bg-gray-100">
						<th class="px-4 py-2 w-10 md:w-16 text-xs md:text-base">No.</th>
						<th class="px-4 py-2 w-14 md:w-24 text-xs md:text-base">Nombre</th>
						<th class="px-4 py-2 w-1/2 text-xs md:text-base">Descripción</th>
						<th class="px-4 py-2 text-xs md:text-base">Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($lineas as $linea)
					<tr>
						<td class="border px-4 py-2 text-xs md:text-base">{{ $linea->id }}</td>
						<td class="border px-4 py-2 text-xs md:text-base">{{ $linea->nombre }}</td>
						<td class="border px-4 py-2 text-xs md:text-base">{{ $linea->descripcion }}</td>
						<td class="border lg:flex px-4 justify-around py-2">
							<button wire:click="edit({{ $linea->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-xs md:text-base">Editar</button>
							<button wire:click="delete({{ $linea->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs md:text-base">Eliminar</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>