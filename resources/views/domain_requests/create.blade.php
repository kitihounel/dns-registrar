@extends('layouts.dns')

@include('components.nav')

@section('content')
<div class="registration-form">
    <h2>Enregistrement d'une demande de domaine</h2>
    <form action="{{ route('requests.store') }}" method="POST">
                @csrf

        <div class="form-grid">
            <!-- Informations du client -->
            <div class="form-group">
    <label for="full_name">Nom complet</label>
    <input name="full_name" type="text" placeholder="Entrez le nom complet" value="{{ old('full_name') }}" required>
    @error('full_name')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" placeholder="Entrez l'email" value="{{ old('email') }}" required>
    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="phone_number">Téléphone</label>
    <input name="phone_number" type="text" placeholder="Entrez le numéro de téléphone" value="{{ old('phone_number') }}">
    @error('phone_number')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="address">Adresse</label>
    <input name="address" type="text" placeholder="Entrez votre adresse" value="{{ old('address') }}">
    @error('address')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="domain_name">Nom du domaine</label>
    <input name="domain_name" type="text" placeholder="Entrez le nom du domaine" value="{{ old('domain_name') }}" required>
    @error('domain_name')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="extension">Extension</label>
    <select name="extension" required>
        <option value=".com" {{ old('extension') == '.com' ? 'selected' : '' }}>.com</option>
        <option value=".fr" {{ old('extension') == '.fr' ? 'selected' : '' }}>.fr</option>
        <option value=".net" {{ old('extension') == '.net' ? 'selected' : '' }}>.net</option>
        <option value=".org" {{ old('extension') == '.org' ? 'selected' : '' }}>.org</option>
    </select>
    @error('extension')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="duration">Durée (années)</label>
    <select name="duration" required>
        <option value="1" {{ old('duration') == '1' ? 'selected' : '' }}>1 an</option>
        <option value="2" {{ old('duration') == '2' ? 'selected' : '' }}>2 ans</option>
        <option value="5" {{ old('duration') == '5' ? 'selected' : '' }}>5 ans</option>
        <option value="10" {{ old('duration') == '10' ? 'selected' : '' }}>10 ans</option>
    </select>
    @error('duration')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="whois_protection">Protection WHOIS</label>
    <select name="whois_protection" required>
        <option value="1" {{ old('whois_protection') == '1' ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ old('whois_protection') == '0' ? 'selected' : '' }}>Non</option>
    </select>
    @error('whois_protection')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

        </div>

        <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">Enregistrer le domaine</button>
    </form>
</div>
@endsection
