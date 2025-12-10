<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear proveedor</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
<div class="min-h-screen flex flex-col">
    <main class="flex-1 max-w-xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-semibold mb-6">Crear proveedor</h1>

        <form action="{{ route('proveedores.store') }}" method="POST"
              class="space-y-5 bg-white p-6 rounded-lg shadow border border-gray-200">
            @csrf

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="nombre" name="nombre" type="text"
                       value="{{ old('nombre') }}"
                       class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('nombre')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input id="telefono" name="telefono" type="text"
                       value="{{ old('telefono') }}"
                       class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('telefono')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email"
                       value="{{ old('email') }}"
                       class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                <textarea id="direccion" name="direccion" rows="3"
                          class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('direccion') }}</textarea>
                @error('direccion')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('proveedores.index') }}"
                   class="text-sm text-gray-600 hover:text-gray-800">
                    Cancelar
                </a>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700">
                    Guardar
                </button>
            </div>
        </form>
    </main>
</div>
</body>
</html>
