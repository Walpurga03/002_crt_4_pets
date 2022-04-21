<?php

mail(
  "praxis@spielberger.at",
  "Es gibt eine neue Nachricht", 
  "Email: {$_POST['email']}, Name: {$_POST['name']}, Nachricht: {$_POST['nachricht']}");


  header("Location: index.php?contacted=1");
?>