<?php 

function readFileIfExists($file) {
  return !file_exists($file) ? null : unserialize(file_get_contents(($file)));
}

// Read data from file, and return it only, if it is an array, set reverse.
function getData($file, $reverse = false) {
  $data = readFileIfExists($file);
  return !($reverse && is_array($data)) ? $data : $data = array_reverse($data);
}

// Save new entry with the previous data.
function saveData($file, $data) {
  $datas = getData($file);
  $datas[] = $data;
  file_put_contents($file, serialize($datas));
}

// If a link is given, will shown the name as link, or just the name.
function joinHomepageToNameIfExists($name, $link) {
  return $link ? "<a href=\"" . $link . "\" target=\"_blank\">" . $name . "</a>" : $name;
}

// Input string cleaned up.
function cleanString($str, $encoding = 'UTF-8') {
  return htmlspecialchars(
    strip_tags(trim($str)),
    ENT_QUOTES | ENT_HTML5,
    $encoding
  );
}
