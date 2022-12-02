<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos Vacante ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-center my-10">Candidatos a Vacante: {{ $vacante->titulo }}</h1>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('candidatos.export', $vacante->id) }}"
                            class="bg-yellow-900 hover:bg-yellow-800 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto">Exportar
                            listado a Excel</a>
                        <a href="{{ route('candidatos.exportPDF', $vacante->id) }}"
                            class="bg-yellow-700 hover:bg-yellow-800 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto">Exportar
                            listado a PDF</a>
                       
                    </div>

                    <div class="md:flex md:justify-center p-5">
                        <ul class="divide-y divide-gray-200 w-full">
                            @forelse($vacante->candidatos as $candidato)
                                <li class="p-3 flex items-center">
                                    <div class="flex-1">
                                        <p class="text-xl font-semibold text-gray-800">{{ $candidato->user->name }}</p>
                                        <p class="text-sm text-gray-600">{{ $candidato->user->email }}</p>
                                        <p class="text-sm font-medium text-gray-600 font-semibold">Dia que se postulo:
                                            <span
                                                class="font-normal">{{ $candidato->user->created_at->diffForHumans() }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <a class="inline-flex items-center shadow-sm px-3 py-1 border border-rose-600 text-sm leading-5 font-medium rounded-full text-rose-600 bg-white hover:bg-rose-50 "
                                            href="{{ asset('storage/cv/' . $candidato->cv) }}" target="_blank"
                                            rel="noreferrer noopener">
                                            Ver CV
                                        </a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-600">No hay candidatos</p>
                            @endforelse
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
