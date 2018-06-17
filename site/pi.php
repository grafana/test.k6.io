<?
  $pi = "3.14159265358979323846264338327950288";

  //$request_type = &$_POST;
  $request_type = &$_GET;

  $decimals = isset($request_type['decimals'])
    ? strval($request_type['decimals'])
    : false
    ;
  if (!$decimals)
  {
    $decimals = 2;
  }

  header("Content-type: text/plain");

  echo substr($pi, 0, 2 + $decimals);
?>
