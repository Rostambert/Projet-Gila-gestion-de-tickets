<!-- filepath: c:\laragon\www\Projet-Gila-gestion-de-tickets\resources\views\Incident\show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de l\'incident') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Incident #{{ $incident->id }}</h1>
                    <p><strong>Description :</strong> {{ $incident->description }}</p>
                    <p><strong>Salle :</strong> {{ $incident->salle }}</p>
                    <p><strong>Poste :</strong> {{ $incident->poste }}</p>
                    <p><strong>Bâtiment :</strong> {{ $incident->batiment }}</p>
                    <p><strong>Matériel :</strong> {{ $incident->materiel->type }}</p>
                    <p><strong>Priorité :</strong> 
                        @if($incident->priorite == 1) Haute 
                        @elseif($incident->priorite == 2) Moyenne 
                        @else Basse 
                        @endif
                    </p>
                    <p><strong>Créé par :</strong> {{ $incident->user->name }}</p>
                    <p><strong>Date de création :</strong> {{ $incident->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Statut :</strong> 
                        @if($incident->etat_id == 1) Ouvert 
                        @elseif($incident->etat_id == 2) En cours 
                        @else Fermé 
                        @endif

                    </p>
                    {{-- modifier l'etat de l'incident --}}
                    <form method="POST" action="{{ route('incident.update', $incident->id) }}" class="mt-4">
                        @csrf
                        @method('PUT')
                        <select name="etat_id" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="1" {{ $incident->etat_id == 1 ? 'selected' : '' }}>Ouvert</option>
                            <option value="2" {{ $incident->etat_id == 2 ? 'selected' : '' }}>En cours</option>
                            <option value="3" {{ $incident->etat_id == 3 ? 'selected' : '' }}>Fermé</option>
                        </select>
                        <x-primary-button class="mt-2">{{ __('Mettre à jour le statut') }}</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>