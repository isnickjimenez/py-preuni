<div class="mt-10 mb-20">
    <x-form-layout>
        <h1 class="tracking-wide uppercase text-xl font-bold text-blue-900 mt-10 mb-10 text-center">
            Matricula del ciclo Pre Champita 2025-II
        </h1>

        {{-- Errores en listado --}}
        {{-- @if ($errors->any())
            <div>
                <h2>Errores:</h2>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('public.enrollments.store') }}" method="POST" class="w-full max-w-lg m-auto">
            @csrf

            <x-card-data>
                <h2 class="text-xl font-bold text-blue-900 mb-10">
                    Datos Personales
                </h2>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni_S">
                            DNI
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="dni_S" type="text" name="dni_S"
                            value="{{ $response['numeroDocumento'] ?? '' }}" readonly>
                    </div>
                    <div class="w-full md:w-2/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Apellidos y Nombres
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-slug_name_S" type="text" name="slug_name_S"
                            value="{{ $response['nombreCompleto'] ?? '' }}" readonly>
                        <input type="hidden" name="name_S" id="name_S" value="{{ $response['nombres'] }}">
                        <input type="hidden" name="last_name_S" id="last_name_S"
                            value="{{ $response['apellidoPaterno'] }}">
                        <input type="hidden" name="middle_name_S" id="middle_name_S"
                            value="{{ $response['apellidoMaterno'] }}">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="address_S">
                            Direccion
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="address_S" type="text" name="address_S" value="{{ old('address_S') }}">
                        <x-input-error field="address_S" />
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Colegio
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" type="text" name="school_S" value="{{ old('school_S') }}">
                        <x-input-error field="school_S" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-city">
                            Celular
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" type="text" name="phone_S" value="{{ old('phone_S') }}">
                        <x-input-error field="phone_S" />
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-state">
                            Grupo
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-900 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state" name="group_G" value="{{ old('group_G') }}">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-zip">
                            Carrera a postular
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-zip" type="text" name="carrer_G" value="{{ old('carrer_G') }}">
                        <x-input-error field="carrer_G" />
                    </div>
                </div>
            </x-card-data>
            <x-card-data>
                <h2 class="text-xl font-bold text-blue-900 mb-10">
                    Datos del Apoderado
                </h2>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="dni_G">
                            DNI
                        </label>
                        <div
                            class="flex items-center rounded border border-gray-900 bg-gray-200 focus-within:ring-2 focus-within:ring-blue-500">
                            <input id="dni_G" name="dni_G" type="text" placeholder="DNI"
                                value="{{ old('dni_G') }}"
                                class="w-full bg-gray-200 text-gray-700 rounded-l px-4 py-3 focus:outline-none" />

                            <button type="button" aria-label="Buscar DNI" onclick="buscarApoderado()"
                                class="pr-3 h-full flex items-center justify-center text-gray-600 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35M16.65 16.65A7 7 0 1 0 5.4 5.4a7 7 0 0 0 11.25 11.25z" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error field="dni_G" />
                        {{-- <p class="text-red-500 text-xs italic">Este campo es obligatorio.</p> --}}
                    </div>

                    <div class="w-full md:w-2/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="slug_name_G">
                            Apellidos y Nombres
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" id="slug_name_G" name="slug_name_G" value="{{ old('name_complet') }}">
                        <x-input-error field="dni_G" />
                    </div>
                    <input type="hidden" name="name_G" id="name_G" value="{{ $response['nombres'] }}">
                    <input type="hidden" name="last_name_G" id="last_name_G"
                        value="{{ $response['apellidoPaterno'] }}">
                    <input type="hidden" name="middle_name_G" id="middle_name_G"
                        value="{{ $response['apellidoMaterno'] }}">
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-city">
                            Celular
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" type="text" name="phone_G" value="{{ old('phone_G') }}">
                        <x-input-error field="phone_G" />
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-zip">
                            Direccion
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-zip" type="text" name="address_G" value="{{ old('address_G') }}">
                        <x-input-error field="address_G" />
                    </div>
                </div>
            </x-card-data>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-yellow-500 text-white text-xl font-bold px-10 py-3 mb-10 rounded-3xl hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-900">
                    Registar Matricula
                </button>
            </div>
        </form>
    </x-form-layout>
</div>


<script>
    function buscarApoderado() {
        const dni = document.getElementById('dni_G').value;


        // $response = [
        //     "nombres" => "MARITZA",
        //     "apellidoPaterno" => "BACA",
        //     "apellidoMaterno" => "ALVAREZ",
        //     "nombreCompleto" => "BACA ALVAREZ MARITZA",
        //     "tipoDocumento" => "1",
        //     "numeroDocumento" => dni,
        //     "digitoVerificador" => "4"
        // ];
        // return view('public.enroll', compact('response'));


        // if (dni.length !== 8) {
        //     alert('El DNI debe tener 8 dígitos');
        //     return;
        // }
        fetch('/query', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    dni: dni
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('No se encontró al apoderado');
                }
                return response.json();
            })
            .then(data => {
                document.getElementById('name_G').value = data.nombres;
                document.getElementById('nombreCompleto').value = data.apellido_paterno;
                // document.getElementById('last_name_G_materno').value = data.apellido_materno;
            })
            .catch(error => {
                alert(error.message);
            });
    }
</script>
