<?php

if (!empty(file_get_contents('php://input'))) {
  $data = json_decode(file_get_contents('php://input'));

  header('Content-Type: application/json');

  var_dump($data);
  // echo json_encode("Bonjour " . $data->prenom . ", tu as " . $data->nom . " ans. <br>");
}