<?php
// ==========================
// Variables principales
// ==========================
$nom = "Jean Robert-Hénaff";
$photo = "photo.jpg"; // nom de ton image dans le même dossier
$titre = "CV $nom";

// Profil
$profil = "Étudiant en BTS SIO au Lycée Dick Ukeiwé (Koutio). Actuellement, je travaille sur des projets de développement de page web et d'applications mobiles. Mon projet à terme est d'être développeur Full Stack avec des compétences en gestion et en informatique. Au cours de ma formation, je voudrais qu'on me confie des minis-projets pour renforcer mes bases en Frontend, Backend + BDD, POO, MCD/MLD et commencer à travailler sur des Frameworks comme React.js et Node.js.";

// Compétences
$competences = [
  "HTML / CSS / PHP",
  "Python (scripts, POO)",
  "SQL (MySQL)",
  "Excel / Word / PowerPoint"
];

// Projets
$projets = [
  "<a href='https://wanej.hermito.fr' target='_blank'>wanej.hermito.fr</a>",
  "Étudiant bénévole en informatique pour la configuration d'ordinateurs et d'aide pour les jeunes à réaliser leurs devoirs en informatique au Kimonos du Coeur.",
  "Rénovation du site Pronote du Lycée Blaise Pascal",
  "Création d'une page web pour échanger des aliments ou des vêtements pendant les émeutes de l'année 2024."
];

// Expériences
$experiences = [
  "Employé à la caisse et au four – Pizzeria Top 6ème ",
  "Assistant de recherche en agroforesterie – IAC de Port-Laguerre",
  "Poissonnier, Extra pour les fêtes de fin d'année – Poissonnerie Belle-Vie",
  "Agent de récupération et de recyclage – EMC, Ducos"
];

// Contact
$email = "jrhnc98@gmail.com";
$tel = "+687 755107";
$adresse = "25, rue des Promeneurs, PK6, Nouméa";
$site = "https://jeanrh-cv.000webhostapp.com";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title><?= $titre ?></title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="cv-container">
    <!-- En-tête -->
    <div class="header">
      <img src="<?= $photo ?>" alt="Photo de profil" class="profile-pic">
      <h1><?= $nom ?></h1>
    </div>

    <!-- Profil -->
    <div class="section">
      <div class="section-title">👤 Profil</div>
      <div class="section-content">
        <p><?= $profil ?></p>
      </div>
    </div>

    <!-- Compétences -->
    <div class="section">
      <div class="section-title">💡 Compétences</div>
      <div class="section-content">
        <ul>
          <?php foreach ($competences as $c) : ?>
            <li><?= $c ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <!-- Projets -->
    <div class="section">
      <div class="section-title">💻 Projets</div>
      <div class="section-content">
        <ul>
          <?php foreach ($projets as $p) : ?>
            <li><?= $p ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <!-- Expériences -->
    <div class="section">
      <div class="section-title">💼 Expériences pro</div>
      <div class="section-content">
        <ul>
          <?php foreach ($experiences as $exp) : ?>
            <li><?= $exp ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <!-- Contact -->
    <div class="section">
      <div class="section-title">📬 Contact</div>
      <div class="section-content">
        <p>Email : <a href="mailto:<?= $email ?>"><?= $email ?></a><br>
          Téléphone : <?= $tel ?><br>
          Adresse : <?= $adresse ?></p>
        <p>🌐 Site : <a href="<?= $site ?>" target="_blank"><?= $site ?></a></p>
      </div>
    </div>

    <!-- Formulaire de contact -->
    <div class="section">
      <div class="section-title">📩 Me contacter</div>
      <div class="section-content">
        <form action="contact.php" method="post" class="contact-form">
          <label>Nom : <input type="text" name="nom" required></label><br>
          <label>Email : <input type="email" name="email" required></label><br>
          <label>Message : <textarea name="message" rows="4" required></textarea></label><br>
          <button type="submit">Envoyer</button>
        </form>
      </div>
    </div>

  </div>
</body>

</html>