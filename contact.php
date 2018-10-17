<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
  </head>
  <body>
    <nav id="menu">
        <ul>
          <li><a href="home.html">Accueil</a></li>
          <li><a href="presentation.html">Présentation</a></li>
          <li><a href="galerie.html">Galerie</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <form class="contact" action="contact.php" method="post">
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="text" name="Prénom" placeholder="Votre prénom">
            <input type="email" name="email" placeholder="Votre email">
            <textarea name="message" rows="8" cols="80" placeholder="Votre message"></textarea>
            <button type="submit" name="envoyer">Envoyer</button>
        </form>
    </main>
    <footer>&copy; Copyright 2018</footer>
  </body>
</html>
