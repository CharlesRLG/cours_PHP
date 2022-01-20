<?php
if (isset($_COOKIE["historique"])) {
  //Vrai -> vérification de la valeur du cookie = chiffre+lettre a-zA-Z0-9
  if (preg_match('/^[a-zA-Z0-9]$/', $_COOKIE["historique"])) {
    //vérification de la présence du fichier
    $userCookie = $_COOKIE["historique"] . ".log";
    if (file_exists($userCookie)) {
      echo "$userCookie existe.";
      if (filesize($userCookie) <= 2 * 1024 * 1024) {
        $historique = file_get_contents($userCookie); // lecture du fichier et le met dans la variable $historique
        $historique .= "\n" . date("d/m/Y H:i:s"); // concaténation des précédantes connections
        file_put_contents($userCookie, $historique);
        // affichage du résultat.
        echo "<br><pre>" . $historique . "</pre>";
      } else {
        echo "erreur lecture fichier log";
      }
    } else {
      echo "$userCookie n'existe pas.";
      setcookie('historique', "", time() - 60 * 60 * 24 * 15); // suppression du cookie
      header('Refresh: 5; URL=exercice_cookie_connection.php'); // redirection page index.php
      exit();
    }
  } else {
    // cookie invalide, création d'un nouveau cookie.
    echo "<p>Cookie invalide !<p>";  // message de prévention
    // suppression du cookie invalide
    setcookie('historique', "", time() - 60 * 60 * 24 * 15); // suppression cookie
    header('Refresh: 5; URL=exercice_cookie_connection.php'); // redirection page index.php
    exit();
  }
}
