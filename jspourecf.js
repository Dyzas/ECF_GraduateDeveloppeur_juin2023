// Ouvrir la fenêtre modale lorsque l'utilisateur clique sur le bouton
var modal = document.getElementById("modal");
var btn = document.getElementById("btnreserver");
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
