<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers =Customer::all();
        return view ('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validatedData = $request->validate([
        'full_name' => [
            'required',
            'string',
            'max:255',
            'regex:/^[a-zA-Z\s]+$/',
        ],
        'email' => [
            'required',
            'email',
            'unique:customers,email',
            'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/',
        ],
        'phone_number' => [
            'nullable',
            'string',
            'max:20',
            'regex:/^\+?[0-9]{1,4}?[-. ]?(\(?\d{1,3}?\)?[-. ]?)?[\d\s-]{3,12}$/',
        ],
        'address' => [
            'nullable',
            'string',
            'regex:/^[a-zA-Z0-9\s,.-]+$/',
        ],
    ], [
        'full_name.regex' => 'Le nom complet ne doit contenir que des lettres et des espaces.',
        'email.regex' => 'L\'email doit être dans un format valide, par exemple : exemple@domaine.com.',
        'phone_number.regex' => 'Le numéro de téléphone n\'est pas valide. Il doit être au format international ou local.',
        'address.regex' => 'L\'adresse contient des caractères invalides. Seuls les lettres, chiffres, espaces, virgules, points et tirets sont autorisés.',
    ]);
    $validatedData['id'] = (string) Str::uuid();
    Customer::create($validatedData); 
    return redirect()->back()->with('success', 'Les données sont valides !');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact(customer));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
      $validatedData = $request->validate([
        'full_name' => [
            'required',
            'string',
            'max:255',
            'regex:/^[a-zA-Z\s]+$/',
        ],
        'email' => [
            'required',
            'email',
            'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/',
            // Si l'email n'a pas changé, il n'est pas nécessaire de le valider à nouveau
            'unique:customers,email,' . $id, // Exclut l'utilisateur actuel de la validation de l'unicité
        ],
        'phone_number' => [
            'nullable',
            'string',
            'max:20',
            'regex:/^\+?[0-9]{1,4}?[-. ]?(\(?\d{1,3}?\)?[-. ]?)?[\d\s-]{3,12}$/',
        ],
        'address' => [
            'nullable',
            'string',
            'regex:/^[a-zA-Z0-9\s,.-]+$/',
        ],
    ], [
        'full_name.regex' => 'Le nom complet ne doit contenir que des lettres et des espaces.',
        'email.regex' => 'L\'email doit être dans un format valide, par exemple : exemple@domaine.com.',
        'phone_number.regex' => 'Le numéro de téléphone n\'est pas valide. Il doit être au format international ou local.',
        'address.regex' => 'L\'adresse contient des caractères invalides. Seuls les lettres, chiffres, espaces, virgules, points et tirets sont autorisés.',
    ]);
        $customer->update($validatedData);

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
    }
}
