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

					<div class="flex flex-row">

						<div class="flex-col w-auto mx-4">
							<label for="nombre_analista" class="block text-gray-700 text-sm font-bold mb-2">Analista:</label>

							<select name="nombre_analista" class="block mt-1 w-full rounded" wire:model="mcodigo_analista">
                    			<option value="">Nombre de analista</option>
                    		@foreach ($analistas as $analista)
                        		<option value="{{ $analista->id }}">{{ $analista->name }}</option>
                    		@endforeach
                			</select>
						</div>
						<div class="flex-col w-auto mb-4">
							<label for="turno" class="block text-gray-700 text-sm font-bold mb-2">Turno:</label>

							<select name="turno" class="block mt-1 w-full rounded" wire:model="mturno">
                    			<option value="">Turno</option>
                    			<option value="1">1</option>
                    			<option value="2">2</option>
                			</select>
						</div>
						<div class="flex-col w-auto mx-4">
							<label for="grupo" class="block text-gray-700 text-sm font-bold mb-2">Grupo:</label>

							<select name="grupo" class="block mt-1 w-full rounded" wire:model="mgrupo">
                    			<option value="">Grupo</option>
                    		@foreach ($grupos as $grupo)
                        		<option value="{{ $grupo->id }}">{{ $grupo->encargado }}</option>
                    		@endforeach
                			</select>
						</div>
					</div>

					<div class="flex flex-row">

						<div class="flex-col w-auto mx-4">
							<label for="maquina" class="block text-gray-700 text-sm font-bold mb-2" wire:model="M">Máquina:</label>

							<select name="maquina" class="block mt-1 w-full rounded" wire:model="mmaquina_id">
                    			<option value="">Maquina</option>
                    		@foreach ($maquinas as $maquina)
                        		<option value="{{ $maquina->id }}">{{ $maquina->nombre }}</option>
                    		@endforeach
                			</select>
						</div>

						<div class="flex-col w-auto mx-4">
							<label for="linea" class="block text-gray-700 text-sm font-bold mb-4">Línea:</label>
							<label for="linea2" class="border rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1" placeholder="Línea">{{$mlinea}}</label>
							@error('linea') <span class="text-red-500">{{ $message }}</span>@enderror
						</div>

						<div class="flex-col w-auto mx-4">
							<label for="tintas" class="block text-gray-700 text-sm font-bold mb-2">Tintas:</label>

							<select name="tintas" class="block mt-1 w-full rounded" wire:model="mtintas">
                    			<option value="N/A" selected default>N/A</option>
                    			<option value="1">1</option>
                    			<option value="2">2</option>
                    			<option value="3">3</option>
                			</select>
						</div>
					</div>

					<div class="flex flex-row mt-4">

					<div class="flex-col w-auto mx-4">
							<label for="tintas" class="block text-gray-700 text-sm font-bold mb-2">Buscar:</label>
							<input type="number" wire:model="buscar_odc" class="appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg">
					</div>

					<div class="flex-col w-96 mx-4">
							<label for="bodc" class="block text-gray-700 text-sm font-bold mb-2">ODC:</label>
							<select name="odc" class="block mt-1 w-full rounded" wire:model="morden_produccion">
                    			<option value="">Seleccionar ODC</option>

                    			@foreach($odcs as $odc)
                    			<option value="{{$odc->numero_orden}}">{{$odc->numero_orden}} {{$odc->codigo_producto}} {{$odc->descripcion_producto}}</option>
              					@endforeach
                			</select>
					</div>
				</div>

				<div class="flex flex-row mt-4">
					<div class="flex-col w-auto mx-4">
						<label for="produccion" class="block text-gray-700 text-sm font-bold mb-2">Producción:</label>
						<input type="number" wire:model="mproduccion" class="appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg">
					</div>
					<div class="flex-col w-auto mx-4">
						<label for="merma" class="block text-gray-700 text-sm font-bold mb-2">Merma:</label>
						<input type="number" wire:model="mmerma" class="appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg">
					</div>
					<div class="flex-col w-auto mx-4">
						<label for="rechazados" class="block text-gray-700 text-sm font-bold mb-4">Rechazados:</label>
							<label for="rechazados2" class="border rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1" placeholder="Rechazados">{{$mrechazados}}</label>

					</div>
				</div>

				<div class="flex flex-row mt-4">
					<div class="flex-col w-auto mx-4">
						<label for="operador" class="block text-gray-700 text-sm font-bold mb-2">Código operador:</label>
						<input type="number" wire:model="mcodigo_operador" class="appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg">
					</div>
					<div class="flex-col w-auto mx-4">
						<label for="motivo_descarte" class="block text-gray-700 text-sm font-bold mb-2">Motivo descarte:</label>

						<select name="motivo_descarte" class="block mt-1 w-full rounded" wire:model="mmotivo_descarte">
                    			<option value="">Seleccionar</option>

                    			@foreach($motivos_descartes as $motivo)
                    			<option value="{{$motivo->motivo}}">{{$motivo->motivo}}</option>
              					@endforeach
                		</select>
					</div>
				</div>

				<div class="flex flex-row mt-4">
					<div class=" w-96 mx-4">
						<label for="comentarios" class="block text-gray-700 text-sm font-bold mb-2">Comentarios:</label>
						<input type="text" wire:model="mcomentarios" class="w-full appearance-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded-lg ">
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