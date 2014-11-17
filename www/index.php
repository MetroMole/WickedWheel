<?php

require_once '/home/action/workspace/model/CharacterClass.php';

require_once '/home/action/workspace/www/page_blocks/global_header.php';

?>
  <link rel="stylesheet" type="text/css" href="/home/action/workspace/www/css/standard.css">
<?php

$character = new CharacterClass('test');

//echo var_dump($character);
$char_info = $character->getCharacter('array');
var_dump($char_info);

echo '<br/><br/>';

require_once '/home/action/workspace/www/page_blocks/global_footer.php';
