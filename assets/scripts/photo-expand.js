const photo = document.getElementById('photo-profil');
const emplacementDOrigine = photo.parentElement;  // l'endroit dans le header

photo.addEventListener('click', function(e) {
  e.stopPropagation();

  if (!this.classList.contains('photo-agrandie')) {
    // OUVERTURE : déplacer la photo dans le body (hors du header piégée par "backdrop-blur-xl")
    document.body.appendChild(this);
    this.classList.add('photo-agrandie');
  } else {
    // FERMETURE : la remettre dans le header
    this.classList.remove('photo-agrandie');
    emplacementDOrigine.appendChild(this);
  }
});

document.addEventListener('click', function() {
  if (photo.classList.contains('photo-agrandie')) {
    photo.classList.remove('photo-agrandie');
    emplacementDOrigine.appendChild(photo);
  }
});