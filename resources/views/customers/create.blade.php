
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de nom de domaine</title>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
  <nav class="nav">
    <h1>DomainManager</h1>
    <div class="nav-links">
      <a href="https://example.com/domains">Mes Domaines</a>
      <a href="https://example.com/account">Mon Compte</a>
      <a href="https://example.com/support">Support</a>
    </div>
  </nav>

  <div class="search-container">
    <h2>Recherchez votre nom de domaine</h2>
    <div class="search-bar">
      <input type="text" placeholder="Entrez le nom de domaine souhaité...">
      <button class="btn">Rechercher</button>
    </div>
  </div>

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
    <h2>Enregistrement d'une demande de domaine</h2>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        <div class="form-grid">
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
                <input name="phone_number" type="text" placeholder="Entrez le numéro de téléphone" value="{{ old('phone_number') }}" required>
                @error('phone_number')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Adresse</label>
                <input name="address" type="text" placeholder="Entrez votre adresse" value="{{ old('address') }}" required>
                @error('address')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="domain_name">Nom domaine</label>
                <input name="domain_name" type="text" placeholder="Entrez le nom du domaine" required>
                @error('domain_name')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="extension">Extension</label>
                <select name="extension" required>
                    <option value=".com">.com</option>
                    <option value=".fr">.fr</option>
                    <option value=".net">.net</option>
                    <option value=".org">.org</option>
                </select>
                @error('extension')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class= "">
            </div>
        </div>
         <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">Enregistrer le domaine</button>
    </form>
</div>


  <div class="form-container">
    <h2>Mes Domaines</h2>
    <table class="domain-table">
      <thead>{{ old('email') }}
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

  <script>
    document.querySelector('.search-bar button').addEventListener('click', function() {
      const domain = document.querySelector('.search-bar input').value;
      if(domain) {
        alert(`Recherche du domaine: ${domain}`);
      }
    });

    document.querySelectorAll('.btn').forEach(button => {
      button.addEventListener('click', function(e) {
        if(this.textContent === 'Gérer') {
          const domainName = this.closest('tr').querySelector('td').textContent;
          alert(`Gestion du domaine: ${domainName}`);
        }
      });
    });

    document.querySelectorAll('.feature-card').forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });

    document.querySelector('a[href="https://example.com/account"]').addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('> div').forEach(div => div.style.display = 'none');
      document.getElementById('account-section').style.display = 'block';
    });

    document.querySelectorAll('.tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>