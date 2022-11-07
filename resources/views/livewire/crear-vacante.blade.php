<form class="md: w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo de la Vacante')" />

        <x-text-input   id="titulo" 
                        class="block mt-1 w-full " 
                        type="text" 
                        name="titulo" 
                        :value="old('titulo')" 
                        />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select  
            id="salario"
            name="salario"
            class="rounded-md block border-gray-300 w-full">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $item)
                <option value="{{ $salario->id }}">{{$item->$salario}}</option>

        </select>

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select  
            id="categoria"
            name="categoria"
            class="rounded-md block border-gray-300 w-full">
        </select>

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="puesto" :value="__('Puesto')" />

        <x-text-input   id="puesto" 
                        class="block mt-1 w-full" 
                        type="text"
                        name="puesto" 
                        :value="old('puesto')" 
                        />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo-dia" :value="__('Ultimo dia para postularse')" />

        <x-text-input   id="ultimo_dia" 
                        class="block mt-1 w-full" 
                        type="date" 
                        name="ultimo_dia" 
                        :value="old('ultimo_dia')" 
                        />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="puesto" :value="__('Descripcion del puesto')" />

        <textarea 
            name="descripcion" 
            class="rounded-md block border-gray-300 w-full h-72">
        </textarea>

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input   id="imagen" 
                        class="block mt-1 w-full" 
                        type="file" 
                        name="imagen" 
                        />
    </div>

    <x-primary-button class="">
                    {{ __('Crear Vacante') }}
    </x-primary-button>


</form>
  