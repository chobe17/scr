<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity">
			<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
		</div>
<!-- This element is to trick the browser into centering the modal contents. -->
	<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
		<div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
			<form>
				<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
					<div class="">
						<div class="mb-4">
							<label for="Input1" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
							<input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Input1" placeholder="Ingresar nombre" wire:model="nombre">
							@error('nombre') <span class="text-red-500">{{ $message }}</span>@enderror
						</div>
					</div>

					<div class="mb-4">
               	 		<label for="tipo_maquina" class="block text-gray-700 text-sm font-bold mb-2">Tipo de maquina</label>

                		<select name="tipo_maquina" class="block mt-1 w-full rounded" wire:model="tipo_maquina">
                    			<option value="">Selecciona tipo de maquina</option>
                    		@foreach ($tmaquinas as $tmaquina)
                        		<option value="{{ $tmaquina->nombre_tipo }}">{{ $tmaquina->nombre_tipo }}</option>
                    		@endforeach
                		</select>
            	 	</div>

             		<div class="mb-4">
               	 		<label for="linea" class="block text-gray-700 text-sm font-bold mb-2">Linea</label>

                		<select name="linea" class="block mt-1 w-full rounded" wire:model="linea">
                    		<option value="">Selecciona linea</option>
                    		@foreach ($tlineas as $tlinea)
                        		<option value="{{ $tlinea->nombre }}">{{ $tlinea->nombre }}</option>
                    		@endforeach
                		</select>
             		</div>

             		<div class="">
						<div class="mb-4">
							<label for="Input2" class="block text-gray-700 text-sm font-bold mb-2">Capacidad:</label>
							<input type="number" value="0" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Input2" wire:model="capacidad">
							@error('capacidad') <span class="text-red-500">{{ $message }}</span>@enderror
						</div>
					</div>

				</div>
				<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
					<span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
						<button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
						Guardar
						</button>
					</span>
					<span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
						<button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
						Cancelar
						</button>
					</span>
				</div>
			</form>
		</div>
	</div>
</div>