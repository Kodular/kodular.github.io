<?php
if (!isset($_GET['dev'])) {
  function sanitize_output($buffer) {
      $search = array(
          '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
          '/[^\S ]+\</s',     // strip whitespaces before tags, except space
          '/(\s)+/s',         // shorten multiple whitespace sequences
          '/<!--(.|\s)*?-->/' // Remove HTML comments
      );
      $replace = array(
          '>',
          '<',
          '\\1',
          ''
      );
      $buffer = preg_replace($search, $replace, $buffer);
      return $buffer;
  }
  ob_start("sanitize_output");
}
