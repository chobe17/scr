<div>
            <div class="mt-4">
                <x-label for="departamento" :value="__('Departamento')" />

                <select name="departamento" class="block mt-1 w-full rounded ">
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                    @endforeach
                </select>
             </div>
</div>
