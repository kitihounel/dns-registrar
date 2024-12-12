@extends('layouts.dns')

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="admin-dashboard">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Administration</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="#domains" class="sidebar-link active">
                    <svg class="icon" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="currentColor"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                    </svg>
                    Domaines enregistrés
                </a>
                <a href="#attributed" class="sidebar-link">
                    <svg class="icon" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="currentColor"
                            d="M19 3H5c-1.1 0-2 .9-2 2h-4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z" />
                    </svg>
                    Domaines attribués
                </a>

            </nav>
        </div>

        <div class="admin-content">
            <div class="admin-header">
                <div class="search-global">
                    <input type="text" placeholder="Recherche globale...">
                </div>
            </div>

            <div class="admin-panel" id="domains-panel">
                <h2>Domaines enregistrés</h2>
                <div class="panel-actions">
                    <div class="search-controls">
                        <input type="text" placeholder="Rechercher un domaine...">
                        <select>
                            <option class="w-14">Tous les statuts</option>
                            <option>Actif</option>
                            <option>Expiré</option>
                            <option>En attente</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">+ Nouveau domaine</button>
                </div>
           @include('domain_requests.index')
            </div>
        </div>
    </div>
</x-app-layout>