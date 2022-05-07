<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity">
			<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
		</div>
<!-- This element is to trick the browser into centering the modal contents. -->
	<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
		<div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
			<form>
				<div class="w-full bg-white px-4 pt-5 pb-4">

					<div class="flex flex-row mt-4">
						<div class="flex-col">
						<label for="turno" class="block text-gray-700 text-sm font-bold mb-2">Turno:</label>

							<select name="turno" class="block mt-1 w-full rounded" wire:model="turno">
                    			<option value="">Turno</option>
                    			<option value="1">1</option>
                    			<option value="2">2</option>
                			</select>
                			</div>
                	</div>

					<div class="flex flex-row mt-4">
						<div class="flex-col">
							<label for="maquina" class="block text-gray-700 text-sm font-bold mb-2">Máquina:</label>

							<select name="maquina" class="block mt-1 w-full rounded" wire:model="maquina">
                    			<option value="">Maquina</option>
                    		@foreach ($maquinas as $mmaquina)
                        		<option value="{{ $mmaquina->id }}">{{ $mmaquina->nombre }}</option>
                    		@endforeach
                			</select>
                			</div>
					</div>

					<div class="flex flex-row mt-4">
						<div class="flex-col">
						<label for="merma" class="block text-gray-700 text-sm font-bold mb-2">Merma:</label>
						<input type="number" wire:model="merma" class="appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg">
						</div>
					</div>	

				<div class="flex flex-row mt-4">
						<div class="flex-col">
							<label for="maquina" class="block text-gray-700 text-sm font-bold mb-2">Motivo de descarte:</label>

							<select name="motivo_descarte" class="block mt-1 w-full rounded" wire:model="motivo_descarte">
                    			<option value="">Motivo descarte</option>
                    		@foreach ($motivos_descartes as $mmotivo_descarte)
                        		<option value="{{ $mmotivo_descarte->motivo }}">{{ $mmotivo_descarte->motivo }}</option>
                    		@endforeach
                			</select>
                			</div>
					</div>

				<div class="flex flex-row mt-4">
					<div class="flex-col">
					<div class=" w-96">
						<label for="comentarios" class="block text-gray-700 text-sm font-bold mb-2">Comentarios:</label>
						<input type="text" wire:model="comentarios" class="w-full appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg ">
					</div>
					</div>
				</div>

				<div class="bg-white px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
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