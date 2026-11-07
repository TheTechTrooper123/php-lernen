<?php
$url = "https://www/test.url.com";

if(!filter_var( FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url ist eine gültige URL mit Query-String");
} else {
  echo("$url ist keine gültige URL mit Query-String");
}
?>