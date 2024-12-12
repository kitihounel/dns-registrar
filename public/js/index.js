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

document.querySelectorAll('.sidebar-link').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
    link.classList.add('active');
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const userDashboardLink = document.querySelector('a[href="https://example.com/account"]');
  
  userDashboardLink.addEventListener('click', function(e) {
    e.preventDefault();
    
    // Hide other sections
    document.querySelector('.admin-dashboard').style.display = 'none';
    document.querySelector('.search-container').style.display = 'none';
    document.querySelector('.features').style.display = 'none';
    document.querySelector('.registration-form').style.display = 'none';
    document.querySelector('.form-container').style.display = 'none';
    document.querySelector('.account-page').style.display = 'none';
    
    // Show user dashboard
document.querySelector('.user-dashboard').style.display = 'block';
  });
});
