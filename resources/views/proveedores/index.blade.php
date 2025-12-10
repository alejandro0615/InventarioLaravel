<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proveedores</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col">
        <main class="flex-1 max-w-5xl mx-auto py-8 px-4">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-semibold">Proveedores</h1>

                <a href="{{ route('proveedores.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700">
                    Nuevo proveedor
                </a>
            </div>

            @if (session('success'))
                <div class="mb-4 px-4 py-2 text-sm text-green-800 bg-green-100 border border-green-200 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto bg-white shadow rounded-lg border border-gray-200">
                <table class="min-w-full table-auto text-sm">
                    <thead class="bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left font-semibold">ID</th>
                            <th class="px-4 py-2 text-left font-semibold">Nombre</th>
                            <th class="px-4 py-2 text-left font-semibold">Teléfono</th>
                            <th class="px-4 py-2 text-left font-semibold">Email</th>
                            <th class="px-4 py-2 text-left font-semibold">Dirección</th>
                            <th class="px-4 py-2 text-right font-semibold">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($proveedores as $proveedor)
                            <tr class="border-t border-gray-200 hover:bg-gray-50">
                                <td class="px-4 py-2">{{ $proveedor->id }}</td>
                                <td class="px-4 py-2">{{ $proveedor->nombre }}</td>
                                <td class="px-4 py-2">{{ $proveedor->telefono }}</td>
                                <td class="px-4 py-2">{{ $proveedor->email }}</td>
                                <td class="px-4 py-2">{{ $proveedor->direccion }}</td>
                                <td class="px-4 py-2 text-right space-x-2">
                                    <a href="{{ route('proveedores.edit', $proveedor) }}"
                                        class="text-xs px-3 py-1 rounded-md bg-yellow-500 text-white hover:bg-yellow-600">
                                        Editar
                                    </a>
                                    <form action="{{ route('proveedores.destroy', $proveedor) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-xs px-3 py-1 rounded-md bg-red-600 text-white hover:bg-red-700"
                                            onclick="return confirm('¿Eliminar este proveedor?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-4 text-center text-gray-500">
                                    No hay proveedores registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>
