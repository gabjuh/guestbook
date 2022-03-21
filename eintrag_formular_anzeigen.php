<?php 

require_once 'header.php';

?>

<h2><?= FORM_TITLE ?></h2>
<form action="eintrag_speichern.php" method="post">
  <label for="title">Titel * </label>
  <input type="text" name="title" id="title" placeholder="Titel angeben" required>

  <label for="content">Inhalt * </label>
  <textarea name="content" id="content" cols="30" rows="10" placeholder="Eintrag schreiben" required></textarea>
  
  <label for="name">Name * </label>
  <input type="text" name="name" id="name" placeholder="Name angeben" required>
  
  <label for="email">Email </label>
  <input type="email" name="email" id="email" placeholder="Email angeben">

  <label for="homepage">Homepage </label>
  <input type="text" name="homepage" id="homepage" placeholder="Link von Hompage angeben">
  <small class="info">* <?= FORM_INFO ?></small>

  <input class="button" type="submit" value="Speichern">
</form>

<?php 

require_once 'footer.php';

?>