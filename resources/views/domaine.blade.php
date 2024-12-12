@extends('layouts.dns')

@section('domaine')

<div class="features">
    <div class="feature-card">
      <h3>Acheter un domaine</h3>
      <p>Trouvez et enregistrez votre nom de domaine idéal</p>
      <button class="btn">Commander</button>
    </div>
    <div class="feature-card">
      <h3>Renouveler un domaine</h3>
      <p>Prolongez la durée de vie de vos domaines</p>
      <button class="btn">Renouveler</button>
    </div>
    <div class="feature-card">
      <h3>Transférer un domaine</h3>
      <p>Transférez vos domaines existants</p>
      <button class="btn">Transférer</button>
    </div>
  </div>

  <div class="registration-form">
    <h2>Enregistrement d'un nouveau domaine</h2>
    <div class="form-grid">
      <div class="form-group">
        <label>Nom du domaine</label>
        <input type="text" placeholder="exemple.com">
      </div>
      <div class="form-group">
        <label>Extension</label>
        <select>
          <option>.com</option>
          <option>.fr</option>
          <option>.net</option>
          <option>.org</option>
        </select>
      </div>
      <div class="form-group">
        <label>Durée d'enregistrement</label>
        <select>
          <option>1 an</option>
          <option>2 ans</option>
          <option>5 ans</option>
          <option>10 ans</option>
        </select>
      </div>
      <div class="form-group">
        <label>Protection Whois</label>
        <select>
          <option>Oui</option>
          <option>Non</option>
        </select>
      </div>
    </div>
    <button class="btn" style="width: 100%; margin-top: 1rem;">Enregistrer le domaine</button>
  </div>

  <div class="form-container">
    <h2>Mes Domaines</h2>
    <table class="domain-table">
      <thead>
        <tr>
          <th>Nom de domaine</th>
          <th>Date d'expiration</th>
          <th>Statut</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>exemple.fr</td>
          <td>01/01/2024</td>
          <td>Actif</td>
          <td><button class="btn">Gérer</button></td>
        </tr>
        <tr>
          <td>exemple.com</td>
          <td>15/03/2024</td>
          <td>Actif</td>
          <td><button class="btn">Gérer</button></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="account-page" id="account-section">
    <h2>Gestion du Compte</h2>
    
    <div class="tabs">
      <button class="tab active">Informations Personnelles</button>
      <button class="tab">Facturation</button>
      <button class="tab">Sécurité</button>
    </div>

    <div class="account-grid">
      <div class="account-card">
        <h3>Informations Personnelles</h3>
        <div class="account-info">
          <label>Nom</label>
          <span>Jean Dupont</span>
        </div>
        <div class="account-info">
          <label>Email</label>
          <span>jean.dupont@example.com</span>
        </div>
        <div class="account-info">
          <label>Téléphone</label>
          <span>+33 6 12 34 56 78</span>
        </div>
        <button class="btn">Modifier</button>
      </div>

      <div class="account-card">
        <h3>Informations de Facturation</h3>
        <div class="account-info">
          <label>Méthode de paiement</label>
          <span>Visa se terminant par 4242</span>
        </div>
        <div class="account-info">
          <label>Adresse de facturation</label>
          <span>123 Rue de Paris, 75001 Paris</span>
        </div>
        <button class="btn">Mettre à jour</button>
      </div>

      <div class="account-card">
        <h3>Sécurité du Compte</h3>
        <div class="account-info">
          <label>Dernière connexion</label>
          <span>22/04/2024 14:30</span>
        </div>
        <div class="account-info">
          <label>Double Authentification</label>
          <span>Activée</span>
        </div>
        <button class="btn">Gérer la sécurité</button>
      </div>
    </div>
  </div>
@endsection