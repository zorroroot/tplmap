<?php
require('lib/smarty-3.1.29/libs/Smarty.class.php');
$smarty = new SmartyBC;

// Run render via CLI
if (php_sapi_name() == "cli") {
    $_GET["inj"] = '';
    $_GET["tpl"] = '';
} 

$inj=$_GET["inj"];
if(isset($_GET["tpl"])) {
  // Keep the formatting a-la-python
  $tpl=str_replace("%s", $inj, $_GET["tpl"]);
}
else {
  $tpl=$inj;
}

echo($smarty->fetch('string:'.$tpl));
?>
