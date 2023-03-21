<?php
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";

  // Créer une connexion à la base de données
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
  }

  // Vérifier si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $couverts = $_POST["couverts"];
    $allergies = $_POST["allergies"];

    // Préparer et exécuter la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO reservations (date, time, couverts, allergies) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $date, $time, $couverts, $allergies);
    $stmt->execute();

    // Afficher un message de confirmation
    echo "Votre réservation a été enregistrée avec succès.";
  }

  // Fermer la connexion
  $conn->close();

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // Récupérer les données du formulaire de connexion
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Vérifier si l'utilisateur existe dans la base de données
  $stmt = $mysqli->prepare("SELECT id, password, role FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  // Vérifier si l'email et le mot de passe correspondent
  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      // Les informations d'authentification sont correctes
      // Vérifier si l'utilisateur est administrateur
      if ($user['role'] == 'admin') {
        // Connecter l'utilisateur et rediriger vers la page d'accueil de l'administrateur
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = 'admin';
        header("Location: admin.php");
        exit();
      } else {
        // Connecter l'utilisateur et rediriger vers la page d'accueil des clients
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = 'client';
        header("Location: index.php");
        exit();
      }
    }
  }

  // Les informations d'authentification sont incorrectes
  // Afficher un message d'erreur
  echo "Email ou mot de passe incorrect.";
?>
