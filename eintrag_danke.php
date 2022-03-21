<?php 

require_once 'header.php';
header('refresh:' . SECONDS_BEFORE_REFRESH .' url=index.php');

?>

<h2><?= TEXT_THANKS_FOR ?></h2>
<p><?= TEXT_BEFORE_REFRESH ?></p>

<?php 

require_once 'footer.php';

?>