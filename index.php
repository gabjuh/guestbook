<?php 

require_once 'header.php';
require 'functions.php';

$eintraege = getData(DATA_FILE_NAME, true);

?>

<?php if (is_array($eintraege) && count($eintraege) != 0): ?>
  <?php foreach ($eintraege as $eintrag): ?>
    <div class="entry">
      <h2>
        <?= $eintrag['title'] ?>
      </h2>
      <p>
        <?= nl2br($eintrag['content']) ?>
      </p>
      <p class="eintragInfo"><?= WROTE_BY ?> 
        <?= joinHomepageToNameIfExists(
          $eintrag['name'], 
          $eintrag['homepage']
        ) ?>
        – 
        <?= strftime(
          '%d.%m.%Y %H:%M:%S', 
          $eintrag['erstellungszeitpunkt']) 
        ?>
      </p>
    </div>
  <?php endforeach; ?>
<?php elseif ($eintraege === null): ?>
  <p><?= FILE_NOT_EXISTS ?></p>
<?php else: ?>
  <p><?= EMPTY_FILE ?></p>
<?php endif; ?>

<a class="button" href="eintrag_formular_anzeigen.php"><?= WRITE_ENTRY ?></a>

<?php 

require_once 'footer.php';

?>