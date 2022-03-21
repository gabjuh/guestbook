<?php 

require_once 'header.php';
require 'functions.php';

$eintraege = [
  'title' => cleanString($_POST['title']),
  'text' => cleanString($_POST['text']),
  'name' => cleanString($_POST['name']),
  'email' => cleanString($_POST['email']),
  'homepage' => cleanString($_POST['homepage']),
  'erstellungszeitpunkt' => time()
];

saveData(DATA_FILE_NAME, $eintraege);

header('Location: eintrag_danke.php');