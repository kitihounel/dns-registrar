<?php

namespace App\Http\Controllers;

use App\Models\DomainRequest;
use Illuminate\Http\Request;

class DomainRequestController extends Controller
{
    public function create()
    {
        return view('domain_requests.create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:domain_requests,email',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'domain_name' => 'required|string|max:255',
            'extension' => 'required|string|in:.com,.fr,.net,.org',
            'duration' => 'required|integer|in:1,2,5,10',
            'whois_protection' => 'required|boolean',
        ]);

        // Création de la demande
        DomainRequest::create($validated);

        return redirect()->route('requests.create')->with('success', 'Demande enregistrée avec succès.');
    }
}
