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
                    <x-app-layout>
                        <div class="max-w-2xl mx-auto p-6 bg-white shadow rounded">
                            <h1 class="text-2xl font-bold mb-4">Signaler un incident</h1>
                            <form method="POST" action="{{ route('incident.create') }}">
                                @csrf
                    
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
                                    <select id="materiel" name="materiel" required class="w-full border-gray-300 rounded-md">
                                        <optgroup label="Bâtiment">
                                            <option value="aeration">Aération</option>
                                            <option value="eclairage">Éclairage</option>
                                            <option value="chauffage">Chauffage</option>
                                            <option value="fenetre">Fenêtre</option>
                                            <option value="mur">Mur</option>
                                            <option value="plafond">Plafond</option>
                                            <option value="porte">Porte</option>
                                            <option value="prise_courant">Prise de courant</option>
                                            <option value="prise_reseau">Prise réseau</option>
                                            <option value="sol">Sol</option>
                                        </optgroup>
                                        <optgroup label="Informatique">
                                            <option value="clavier">Clavier</option>
                                            <option value="ecran">Écran</option>
                                            <option value="pc_portable">PC Portable</option>
                                            <option value="souris">Souris</option>
                                            <option value="unite_centrale">Unité centrale</option>
                                            <option value="videoprojecteur">Vidéoprojecteur</option>
                                        </optgroup>
                                        <optgroup label="Mobilier">
                                            <option value="armoire">Armoire</option>
                                            <option value="chaise">Chaise</option>
                                            <option value="table">Table</option>
                                        </optgroup>
                                    </select>
                                </div>
                    
                                <div class="mb-4">
                                    <x-input-label for="priorite" :value="__('Priorité')" />
                                    <select id="priorite" name="priorite" required class="w-full border-gray-300 rounded-md">
                                        <option value="1">1 - Haute</option>
                                        <option value="2">2 - Moyenne</option>
                                        <option value="3">3 - Basse</option>
                                    </select>
                                </div>
                    
                                <div class="text-right">
                                    <x-primary-button>{{ __('Signaler l\'incident') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                    </x-app-layout>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
