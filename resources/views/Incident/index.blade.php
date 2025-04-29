<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des Incidents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                    <div class="container mx-auto p-4">
                        
                        <table class="w-full table-auto border-collapse border border-gray-400">
                          <thead class="bg-gray-200">
                            <tr>
                              <th class="px-4 py-2 border border-gray-400">Description</th>
                              <th class="px-4 py-2 border border-gray-400">Materiel concerné</th>
                              <th class="px-4 py-2 border border-gray-400">Salle</th>
                              <th class="px-4 py-2 border border-gray-400">Poste</th>
                              <th class="px-4 py-2 border border-gray-400">Batiment</th>
                              <th class="px-4 py-2 border border-gray-400">Priorité</th>
                              <th class="px-4 py-2 border border-gray-400">Statut</th>
                              <th class="px-4 py-2 border border-gray-400">Date et Heure de fermeture</th>
                              <th class="px-4 py-2 border border-gray-400">Date et Heure de signalement</th>
                              
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                            <!-- Boucle sur les incidents -->
                            {{-- @foreach($incidents as $incident)
                            <tr class="even:bg-gray-100">
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->id }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->date }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->description }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->statut }}</td>
                            </tr>
                            @endforeach --}}
                          </tbody>
                        </table>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" onclick="window.location.href='{{ route('incident.create') }}'">Signaler un incident</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
