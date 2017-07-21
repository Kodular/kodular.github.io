<?php

exec('git pull 2>&1', $output);

foreach($output  as $index=>$line) {
  echo ($index+1)."-> ".$line."<br>";
}
