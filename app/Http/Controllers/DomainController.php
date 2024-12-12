<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Domain;
use App\Models\Request as DomainRequest; // Alias pour éviter conflit avec la classe Request de Laravel

class DomainController extends Controller
{
    public function index()
    {
        // Récupérer tous les domaines avec leurs demandes et clients associés
        $domains = Domain::with(['request', 'customer'])->get();
        return view('domains.index', compact('domains'));
    }

    public function create()
    {
        // Récupérer toutes les demandes et leurs clients
        $requests = DomainRequest::with('customer')->get();
        return view('domains.create', compact('requests'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'domain_name' => 'required|string|max:255',
            'extension' => 'required|string|in:.com,.fr,.net,.org',
            'duration' => 'required|integer|in:1,2,5,10',
            'whois_protection' => 'required|boolean',
            'request_id' => 'required|exists:requests,id',
        ]);

        // Récupérer la demande associée
        $domainRequest = DomainRequest::findOrFail($validated['request_id']);

        // Créer un nouveau domaine
        Domain::create([
            'name' => $validated['domain_name'] . $validated['extension'],
            'extension' => $validated['extension'],
            'duration' => $validated['duration'],
            'whois_protection' => $validated['whois_protection'],
            'request_id' => $domainRequest->id, // Lier le domaine à la demande
            'customer_id' => $domainRequest->customer_id, // Lier le domaine au client
        ]);

        return redirect()->route('domains.index')->with('success', 'Domaine créé avec succès.');
    }
}
