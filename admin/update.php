<?php

exec('cd .. && sudo git pull 2>&1', $output);
foreach($output  as $index=>$line) {
  echo ($index+1)."-> ".$line."<br>";
}

exec('cd /var/www && sudo chmod -R 755 html/ 2>&1', $output);
