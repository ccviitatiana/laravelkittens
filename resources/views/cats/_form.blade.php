@csrf
<label class="uppercase text-gray-100 text-xs">Título</label>
<input type="text" name="title" class="rounded bg-gray-900 border-gray-800 w-full mb-4" value="{{ @$cat->breed }}">

<label class="uppercase text-gray-100 text-xs">Contenido</label>
<textarea name="body" id="" rows="5" class="rounded bg-gray-900 border-gray-800 w-full mb-4">{{ @$cat->body }}</textarea>

<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione raza</label>
<select id="countries"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="Abisinio">Abisinio</option>
    <option value="Abisinio">Abisinio</option>
    <option value="Americano de pelo duro">Americano de pelo duro</option>
</select>
<br>
<label class="uppercase text-gray-100 text-xs">Nombre gato</label>
<textarea name="body" id="" rows="5" class="rounded bg-gray-900 border-gray-800 w-full mb-4">{{ @$cat->body }}</textarea>

<label class="uppercase text-gray-100 text-xs">Raza</label>
<textarea name="body" id="" rows="5" class="rounded bg-gray-900 border-gray-800 w-full mb-4">{{ @$cat->body }}</textarea>

<label class="uppercase text-gray-100 text-xs">Contenido</label>
<textarea name="body" id="" rows="5" class="rounded bg-gray-900 border-gray-800 w-full mb-4">{{ @$cat->body }}</textarea>


<div class="flex justify-between items-center">
    <a href="{{ route('cats.index') }}" class="text-gray-100">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
