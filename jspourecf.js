Wdocument.addEventListener("DOMContentLoaded", function() {
  const imageTitles = document.querySelectorAll(".image-title");
  imageTitles.forEach((title) => {
    title.style.display = "none";
    title.parentElement.addEventListener("mouseover", () => {
      title.style.display = "block";
    });
    title.parentElement.addEventListener("mouseout", () => {
      title.style.display = "none";
    });
  });

  // Récupération de la fenêtre modale et du bouton pour l'ouvrir
  const modal = document.getElementById("modal");
  const btn = document.getElementById("btnSubmitReserver");

  // Récupération de la croix pour fermer la fenêtre modale
  const closeBtn = document.getElementsByClassName("close")[0];

  // Fonction pour ouvrir la fenêtre modale
  function openModal() {
    modal.style.display = "block";
  }

  // Fonction pour fermer la fenêtre modale
  function closeModal() {
    modal.style.display = "none";
  }

  // Ajout d'un gestionnaire d'événement au bouton pour ouvrir la fenêtre modale
  btn.addEventListener("click", function() {
    openModal();
  });

  // Fermer la fenêtre modale si l'utilisateur clique sur la croix
  closeBtn.addEventListener("click", function() {
    closeModal();
  });

  // Fermer la fenêtre modale si l'utilisateur clique en dehors de la fenêtre
  window.addEventListener("click", function(event) {
    if (event.target === modal) {
      closeModal();
    }
  });
});
