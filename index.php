<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8" />
    <title>Le Quai Antique - Restaurant</title> 
    <link rel="stylesheet" href="./stylenewecf.css" />
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide/dist/css/glide.theme.min.css">    
    <script src="./jspourecf.js"></script>
  </head>
  <body>
  <?php require "Ecfnewbackend.php"; ?>
    <header>
      <nav>
        <ul>
          <li><a href="#about">À propos</a></li>
          <li><a href="./ECF-FE-menu.html">Menu</a></li>
          <li><a href="#reservation">Réservation</a></li>
        </ul>
      </nav>     
      <img src="https://images.brandsupply.com/design_logo-artswithtom-IB9QzYCu_245_170.jpg" alt="Logo Le Quai Antique" />
      <section id="login">
        <h2>Connexion</h2>
        <form>
          <label for="email">Adresse email :</label>
          <input type="email" id="email" name="email" required />
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required />
          <input type="submit" value="Se connecter" />
        </form>
      </section>
    </header>
    <section id="banner">
      <h1>Le Quai Antique</h1>
      <p>Un lieu unique pour les amateurs de gastronomie</p>
    </section>
    <section id="carousel">
      <h2>Nos spécialités</h2>
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="image-container">
                <img src="https://images.ctfassets.net/abth1wsqvsx6/4qGNsNikjjPezcwEmVdqg8/d8b237d540dce913af9465c858757099/2022-blog-inspirations-hero-accompagnement-foie-gras-desktop-840x850.jpg?fm=jpg" alt="foiegras" />
                <div class="image-title" data-title="Foie gras"> </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="image-container">
                <img src="https://img.cuisineaz.com/660x660/2013/12/20/i2126-cote-de-boeuf-au-thym-et-au-romarin.jpeg" alt="cote-de-boeuf-grillé" />
                <div class="image-title" data-title="Côte de boeuf grillée"> </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="image-container">
                <img src="https://files.meilleurduchef.com/mdc/photo/recette/tarte-fine-aux-pommes/tarte-fine-aux-pommes-1200.jpg" alt="tarte-fine-aux-pommes-640" />
                <div class="image-title" data-title="Tarte fine aux pommes"> </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div>
      </div>
    </section>           
    <section id="about" style="display: inline-block;">
      <h2>À propos</h2>
      <p>Le Quai Antique est un restaurant gastronomique situé dans le centre historique de la ville. Nous vous proposons une cuisine raffinée à base de produits frais et locaux, dans un cadre authentique et chaleureux.</p>
    </section>   
    <section id="reservation">
      <h2>Réservation</h2>
      <p>Veuillez sélectionner une date et une heure pour votre réservation :</p>
      <button id="btnReserver" class="btn btn-primary">Réserver</button>

      <div id="modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div id="reservation-form">
            <form id="form-reservation" method="POST">
              <label for="date">Date :</label>
              <input type="date" id="date" name="date" required />
              <label for="time">Heure :</label>
              <input type="time" id="time" name="time" min="12:00" max="22:00" required />
              <label for="couverts">Nombre de couverts :</label>
              <input type="number" id="couverts" name="couverts" min="1" max="20" required />
              <label for="allergies">Allergies :</label>
              <textarea id="allergies" name="allergies"></textarea>
              <input type="submit" value="Réserver" id="btnSubmitReserver" />
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="./modal.css"></script>
    <script src="./modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/glide.min.js"></script>
    <script> 
          new Glide('.glide', {
        type: 'carousel',
        perView: 3,
        focusAt: 'center',
        autoplay: 3000,
        hoverpause: true,
        breakpoints: {
          800: {
            perView: 1
          }
        }
      }).mount();   
    </script>     
    <footer>
      <p>Horaires d'ouverture: 12h00 - 14h30, 19h00 - 22h30</p>
    </footer>
  </body>
</html>
