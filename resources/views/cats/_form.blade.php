@csrf
<label class="uppercase text-gray-100 text-xs">Título</label>
<input type="text" name="title" class="rounded bg-gray-900 border-gray-800 w-full mb-4" value="{{ @$cat->breed }}">

<label class="uppercase text-gray-100 text-xs">Contenido</label>
<textarea name="body" id="" rows="5" class="rounded bg-gray-900 border-gray-800 w-full mb-4">{{ @$cat->body }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('cats.index') }}" class="text-gray-100">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
