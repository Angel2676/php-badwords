<?php
$text ='Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
nisi ut aliquip ex ea commodo incididunt consequat. Duis aute irure dolor in
reprehenderit in voluptate velit incididunt esse cillum dolore eu fugiat nulla
pariatur. Excepteur sint occaecat incididunt cupidatat non proident, sunt in culpa
qui officia deserunt mollit anim incididunt id est laborum.';

$textLength = strlen($text);


echo $text;
echo '<br>'.'<br>'.'<br>'.'Il paragrafo contiene: ' . $textLength.' '.'caratteri';

$badword = $_GET['name'];

$badwordReplace = str_replace($badword,'3*', $text,$count);
echo '<br>'.'<br>'.'<br>'.$badwordReplace;
echo '<br>'.'<br>'.'<br>'.'SONO STATE FATTE '.$count. ' '. 'SOTITUZIONI';



 ?>
