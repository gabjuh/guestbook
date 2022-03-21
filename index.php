<?php 

require_once 'header.php';
require 'functions.php';

$eintraege = getData(DATA_FILE_NAME, true);

?>

<?php if ($eintraege !== false): ?>
  <?php foreach ($eintraege as $eintrag): ?>
    <div class="entry">
      <h2>
        <?= $eintrag['title'] ?>
      </h2>
      <p>
        <?= nl2br($eintrag['text']) ?>
      </p>
      <p class="eintragInfo"><?= TEXT_WROTE_BY ?> 
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
<?php else: ?>
  <p><?= TEXT_EMPTY_BOOK ?></p>
<?php endif; ?>

<a class="button" href="eintrag_formular_anzeigen.php"><?= TEXT_WRITE_ENTRY ?></a>

<?php 

require_once 'footer.php';

?>