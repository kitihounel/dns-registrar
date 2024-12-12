@extends('layouts.dns')

<!-- @include('components.nav') -->

@section('content')
<div class="domain-list">
    <div>
    <h2>Liste des domaines enregistrés</h2>
    </div>

    <div class="my-6 justify-end flex rounded-md">
        <a href="/" class="p-1  bg-blue-500 text-white ">Faire autre demande</a>
    </div>



    <table class="table-auto border-collapse border border-gray-400 w-full mt-5">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-400 px-4 py-2">Nom du client</th>
                <th class="border border-gray-400 px-4 py-2">Email</th>
                <th class="border border-gray-400 px-4 py-2">Nom du domaine</th>
                <th class="border border-gray-400 px-4 py-2">Extension</th>
                <th class="border border-gray-400 px-4 py-2">Durée</th>
                <th class="border border-gray-400 px-4 py-2">Protection WHOIS</th>
                <th class="border border-gray-400 px-4 py-2">Statut</th>
            </tr>
        </thead>
        <tbody>
            @forelse($domains as $domain)
            <tr class="hover:bg-gray-100">
                <td class="border border-gray-400 px-4 py-2">{{ $domain->domainRequest->client->full_name }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $domain->domainRequest->client->email }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $domain->domainRequest->domain_name }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $domain->domainRequest->extension }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $domain->domainRequest->duration }} ans</td>
                <td class="border border-gray-400 px-4 py-2">
                    {{ $domain->domainRequest->whois_protection ? 'Oui' : 'Non' }}
                </td>
                <td class="border border-gray-400 px-4 py-2">{{ $domain->status }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="border border-gray-400 px-4 py-2 text-center">
                    Aucun domaine enregistré.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
