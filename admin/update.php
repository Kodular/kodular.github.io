<?php

exec('cd .. && sudo git pull && cd .. & sudo chmod -R 755 html/ 2>&1', $output);

foreach($output  as $index=>$line) {
  echo ($index+1)."-> ".$line."<br>";
}
