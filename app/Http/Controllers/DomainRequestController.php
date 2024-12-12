<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Domain;
use App\Models\DomainRequest;
use Illuminate\Http\Request;

class DomainRequestController extends Controller
{
    public function index()
{
    // Récupère tous les domaines avec leurs relations
    $domains = Domain::with(['domainRequest.client'])->get();

    // Retourne la vue avec les données
    return view('domain_requests.index', compact('domains'));
}

    public function create()
    {
        return view('domain_requests.create'); // Modifiez le nom de la vue si nécessaire
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255|regex:/^[a-zA-ZÀ-ÿ\s\-]+$/',
            'email' => 'required|email|unique:clients,email',
            'phone_number' => 'nullable|regex:/^(\+?\d{1,3}[-.\s]?)?(\(?\d{2,4}\)?[-.\s]?)?\d{6,10}$/',
            'address' => 'nullable|string|max:255|regex:/^[\w\s,\.]+$/',
            'domain_name' => 'required|string|max:255|regex:/^[a-zA-Z0-9-]+$/', // Nom de domaine sans espace ni caractères spéciaux
            'extension' => 'required|string|max:10|regex:/^\.[a-z]{2,4}$/',
            'duration' => 'required|integer|min:1|max:10',
            'whois_protection' => 'required|boolean',
        ],  [
            'full_name.regex' => 'Le nom complet doit uniquement contenir des lettres et des espaces.',
            'phone_number.regex' => 'Le numéro de téléphone doit être au format valide (ex: +33 1 23 45 67 89).',
            'address.regex' => 'L\'adresse doit contenir uniquement des lettres, des chiffres, des espaces, des virgules et des points.',
            'domain_name.regex' => 'Le nom de domaine ne doit contenir que des lettres, des chiffres et des tirets (-), sans espaces ni caractères spéciaux.',
            'extension.regex' => 'L\'extension doit être au format valide (ex: .com, .fr).',
        ]);

        
        // Création du client ou récupération s'il existe déjà
        $client = Client::firstOrCreate(
            ['email' => $validated['email']],
            [
                'full_name' => $validated['full_name'],
                'phone_number' => $validated['phone_number'],
                'address' => $validated['address'],
            ]
        );

        // Création de la demande de domaine
        $domainRequest = $client->domainRequests()->create([
            'domain_name' => $validated['domain_name'],
            'extension' => $validated['extension'],
            'duration' => $validated['duration'],
            'whois_protection' => $validated['whois_protection'],
        ]);

        // Création des informations du domaine
        $domainRequest->domain()->create();
        return redirect()->route('requests.index')->with('success', 'Demande enregistrée avec succès.');

    }
}
