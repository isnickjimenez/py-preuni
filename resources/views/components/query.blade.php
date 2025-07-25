<x-form-layout>
    <div class="tracking-wide uppercase text-blue-900 mt-8 mb-0.5 text-center">
        <h1 class="text-6xl font-bold mt-8 mb-0.5">
            Matricula
        </h1>
        <p class=" text-xl mb-10">
            <b>Prechampita</b> 2025-II
        </p>
    </div>

    <form action="{{ route('api.invoke') }}" method="POST">
        @csrf
        <label for="dni_S" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-8 text-center">
            Ingresa DNI del estudiante
        </label>
        <div class="flex flex-col items-center justify-center space-y-4">
            <div class="flex items-center space-x-2">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1hzpv58 w-10" focusable="false"
                    aria-hidden="true" viewBox="0 0 24 24" data-testid="FingerprintIcon">
                    <path
                        d="M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39-2.57 0-4.66 1.97-4.66 4.39 0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94 1.7 0 3.08 1.32 3.08 2.94 0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z">
                    </path>
                </svg>
                <input
                    class="w-48 border-0 border-b-2 border-blue-900 text-blue-900 bg-transparent px-2 py-2 focus:outline-none focus:ring-0 focus:border-blue-900"
                    type="text" id="dni_S" name="dni_S" value="{{ old('dni_S') }}" placeholder="DNI*" />
            </div>
            <x-input-error field="dni_S" />
            <button type="submit"
                class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-900">
                Consultar
            </button>
        </div>
    </form>

    <a href="http://wa.me/51982797332"
        class="inline-block mt-10 bg-blue-100 text-blue-900 font-semibold px-4 py-2 rounded hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
        Mas información
    </a>
    <a href="https://wa.me/51982797332" target="_blank"
        class="inline-flex items-center gap-2 bg-green-100 text-green-900 font-semibold px-4 py-2 rounded hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
            <path
                d="M16.7 13.2c-.3-.2-1.7-.8-2-1s-.5-.1-.7.2-.8 1-1 1.1c-.2.1-.4.1-.7 0s-1.3-.5-2.5-1.7c-.9-.9-1.5-2.1-1.7-2.5-.1-.2 0-.5.1-.7.1-.1.9-1.1 1.1-1.4.1-.2.1-.4 0-.6s-1.2-3.1-1.4-3.5c-.2-.4-.4-.3-.6-.3-.2 0-.4 0-.6 0C4.6 3.8 3 6.3 3 9.2c0 3.3 2.7 6.1 6.1 6.1 1.1 0 2.1-.3 3-.8l.3.2 3.2 1c.3.1.6 0 .7-.3l1-3.2c.1-.3 0-.6-.3-.7zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.5 5l-1.5 4.5L6.5 21c1.5.9 3.2 1.4 5 1.4 5.5 0 10-4.5 10-10S17.5 2 12 2z" />
        </svg>
        WhatsApp
    </a>
</x-form-layout>

{{-- <x-form-layout>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                    href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2020 Acme Corp. All rights reserved.
        </p>
    </div>
</x-form-layout> --}}
