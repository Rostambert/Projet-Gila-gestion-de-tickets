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
                              
                              @if (auth()->user()->role == 'agent')
                              <th class="px-4 py-2 border border-gray-400">Créé par</th>
                              <th class="px-4 py-2 border border-gray-400">Action</th> 
                              @endif
                              @if (auth()->user()->role == 'user')
                              <th class="px-4 py-2 border border-gray-400">Commentaire</th>
                                
                              @endif
                              
                              
                              
                              
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($incidents as $incident)
                            <tr class="hover:bg-gray-100 cursor-pointer" onclick="window.location.href='{{ route('incident.show', $incident->id) }}'">
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->description }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->materiel->type }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->salle }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->poste }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->batiment }}</td>
                              <td class="px-4 py-2 border border-gray-400">
                                @if($incident->priorite == 1) Haute 
                                @elseif($incident->priorite == 2) Moyenne 
                                @else Basse 
                                @endif
                              </td>
                              <td class="px-4 py-2 border border-gray-400">
                                @if($incident->etat_id == 1) Ouvert 
                                @elseif($incident->etat_id == 2) En cours 
                                @else Fermé 
                                @endif
                              </td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->date_fermeture }}</td>
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->created_at }}</td>
                              @if (auth()->user()->role == 'agent')
                              <td class="px-4 py-2 border border-gray-400">{{ $incident->user->name }}</td>
                              <td class="px-4 py-2 border border-gray-400">
                                <a href="{{ route('incident.show', $incident->id) }}" class="text-blue-500 hover:text-blue-700">Voir</a>
                              </td>
                              @endif
                              @if (auth()->user()->role == 'user')
                              <th class="px-4 py-2 border border-gray-400"> 
                                {{-- j'aimerais recuperer - --}}
                              </th>
                                
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        @if (auth()->user()->role=='user')
                          
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" onclick="window.location.href='{{ route('incident.create') }}'">Signaler un incident</button>
                        @endif
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
