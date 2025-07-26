<x-form-layout>
    <div class="flex">
        <div class="tracking-wide uppercase w-full text-left text-blue-900">
            <div class="mb-16 mt-24 ml-8">
                <h1 class="text-4xl font-bold mb-0.5">
                    Matricula con exito
                </h1>
                <p class="text-l mt-4 mb-0.5">
                    ¡Felicidades! Su matricula fue registrada con exito.
                </p>
            </div>
            <div class="text-white text-xl font-bold">
                <a class="bg-yellow-500 px-10 py-5 m-4  rounded-2xl hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-900"
                    href="https://wa.me/51982797332">
                    WhatsApp
                </a>
                <a class="bg-green-500 px-10 py-5 m-4 rounded-2xl hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-900"
                    href="{{ route('home.prepage') }}">
                    Volver
                </a>
            </div>
        </div>
        <div class="img-logo">
            <img class="" src="/img/logo_prechampita.png" alt="Logo de prechampita">
        </div>
    </div>
</x-form-layout>

<style>
    .container-card-succcess {
        /* background: #333; */
        /* width: 100%; */
    }

    .contaner-text-success {
        width: 100%;
    }

    .title-succes {
        /* margin-top: 80px */
    }

    .img-logo {
        width: 999px;
        height: auto;
        margin-left: 80px;
    }
</style>
