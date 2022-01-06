<?php
$responce = array("first responce", "second responce", "third responce");
$random_responce = array_rand($responce);
echo '{"responce": "'.$responce[$random_responce].'"}';
?>
