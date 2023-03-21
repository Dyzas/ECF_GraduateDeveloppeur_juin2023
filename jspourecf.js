// Ouvrir la fenêtre modale lorsque l'utilisateur clique sur le bouton
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

// Fermer la fenêtre modale lorsque l'utilisateur clique sur le bouton "X"
span.onclick = function() {
  modal.style.display = "none";
}

// Fermer la fenêtre modale lorsque l'utilisateur clique en dehors de la fenêtre
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

