<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datenschutzerklärung</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 2em;
      background-color: #f8f8f8;
      color: #333;
    }
    h1, h2 {
      color: #2D2D46;
    }
    a {
      color: #E30613;
    }
  </style>
</head>
<body>
  <h1>Datenschutzerklärung</h1>

  <p>Der Schutz deiner persönlichen Daten ist uns wichtig. Nachfolgend informieren wir dich darüber, welche Daten auf unserer Website erfasst und wie sie verwendet werden.</p>

  <h2>1. Verantwortlicher</h2>
  <p>
    <?php
      // Diese Daten kannst du oben zentral definieren oder auslagern
      $name = "Daniel Wilharm";
      $adresse = "31655, Stadhthagen";
      $email = "dev@equisnap.app";

      echo "$name<br>$adresse<br>E-Mail: <a href='mailto:$email'>$email</a>";
    ?>
  </p>

  <h2>2. Zugriffsdaten</h2>
  <p>Beim Besuch unserer Website werden automatisch Daten wie die IP-Adresse, Browsertyp und Betriebssystem gespeichert. Diese Daten dienen ausschließlich der technischen Überwachung und Sicherheit des Servers.</p>

  <h2>3. Cookies</h2>
  <p>Unsere Website verwendet keine Cookies oder Tracking-Tools.</p>

  <h2>4. Kontaktaufnahme</h2>
  <p>Wenn du uns per E-Mail kontaktierst, speichern wir deine Angaben nur zur Bearbeitung deiner Anfrage. Eine Weitergabe erfolgt nicht.</p>

  <h2>5. Deine Rechte</h2>
  <p>Du hast das Recht auf Auskunft, Berichtigung, Löschung und Einschränkung der Verarbeitung deiner Daten. Bitte kontaktiere uns dafür unter den oben angegebenen Kontaktdaten.</p>

  <h2>6. Änderung dieser Erklärung</h2>
  <p>Wir behalten uns vor, diese Datenschutzerklärung bei Bedarf anzupassen.</p>

  <p>Stand: <?php echo date("F Y"); ?></p>
</body>
</html>