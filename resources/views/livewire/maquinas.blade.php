<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
		Administrador de maquinas
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

			<button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Agregar maquina</button>
			@if($isOpen)
			@include('livewire.create-maquinas')
			@endif

			<table class="table-fixed w-full">
				<thead>
					<tr class="bg-gray-100">
						<th class="px-4 py-2 w-1/12">No.</th>
						<th class="px-4 py-2 w-1/12">Nombre</th>
						<th class="px-4 py-2 w-2/12">Tipo</th>
						<th class="px-4 py-2 w-3/12">Linea</th>
						<th class="px-4 py-2 w-2/12">Capacidad</th>
						<th class="px-4 py-2 w-3/12">Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($maquinas as $maquina)
					<tr>
						<td class="border px-4 py-2 w-1/12">{{ $maquina->id }}</td>
						<td class="border px-4 py-2 w-1/12">{{ $maquina->nombre }}</td>
						<td class="border px-4 py-2 w-2/12">{{ $maquina->tipo_maquina }}</td>
						<td class="border px-4 py-2 w-3/12">{{ $maquina->linea }}</td>
						<td class="border px-4 py-2 w-2/12">{{ $maquina->capacidad }}</td>
						<td class="border flex px-4 w-auto justify-around py-2">
							<button wire:click="edit({{ $maquina->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-xs md:text-base">Editar</button>
							<button wire:click="delete({{ $maquina->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs md:text-base">Eliminar</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>