<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Request;
use App\Models\Customer;
use Illuminate\Http\Request as HttpRequest;

class DomainController extends Controller
{
    public function index()
    {
        // Récupérer tous les domaines avec leurs demandes associées
        $domains = Domain::with('request')->get();
        return view('domains.index', compact('domains'));
    }

    public function create()
    {
        $requests = Request::all(); // Récupérer toutes les demandes
        return view('domains.create', compact('requests'));
    }

    public function store(HttpRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'extension' => 'required|string|in:.com,.fr,.net,.org',
            'duration' => 'required|integer|in:1,2,5,10',
            'whois_protection' => 'required|boolean',
        ]);
    
        Domain::create([
            'name' => $validated['name'] . $validated['extension'], // Nom complet avec extension
            'extension' => $validated['extension'],
            'duration' => $validated['duration'],
            'whois_protection' => $validated['whois_protection'],
            'active' => true, // Par défaut, le domaine est actif
            'request_id' => $request->request_id, // Si applicable
        ]);
    
        return redirect()->route('domains.index');
    }
    
}
