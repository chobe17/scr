<div>
            <div class="mt-4">
                <x-label for="area" :value="__('Departamentos')" />

                <select name="area" class="block mt-1 w-full rounded ">
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                    @endforeach
                </select>
             </div>
</div>
