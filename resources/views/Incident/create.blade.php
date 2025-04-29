<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-2xl mx-auto p-6 bg-white shadow rounded">
                        <h1 class="text-2xl font-bold mb-4">Signaler un incident</h1>
                        <form method="POST" action="{{ route('incident.store') }}">
                            @csrf
                   <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> 
                            <div class="mb-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" rows="4" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                            </div>
                
                            <div class="mb-4">
                                <x-input-label for="salle" :value="__('Salle')" />
                                <x-text-input id="salle" name="salle" required />
                            </div>
                
                            <div class="mb-4">
                                <x-input-label for="poste" :value="__('Poste')" />
                                <x-text-input id="poste" name="poste" required />
                            </div>
                
                            <div class="mb-4">
                                <x-input-label for="batiment" :value="__('Bâtiment')" />
                                <x-text-input id="batiment" name="batiment" required />
                            </div>
                
                            <div class="mb-4">
                                <x-input-label for="materiel" :value="__('Matériel concerné')" />
                                <select id="materiel" name="materiel_id" required class="w-full border-gray-300 rounded-md">
                                    @foreach ($materiels as $materiel)
                                    <option value="{{ $materiel->id }}"> {{ $materiel->type }} </option>
                                    @endforeach
                                </select>
                            </div>
                
                            <div class="mb-4">
                                <x-input-label for="priorite" :value="__('Priorité')" />
                                <select id="priorite" name="priorite" required class="w-full border-gray-300 rounded-md">
                                    <option value="1">Haute</option>
                                    <option value="2">Moyenne</option>
                                    <option value="3">Basse</option>
                                </select>
                            </div>
                
                            <div class="text-right">
                                <x-primary-button>{{ __('Signaler l\'incident') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
