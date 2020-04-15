<?
  //$request_type = &$_POST;
  $request_type = &$_GET;

  $results = array( "heads", "tails" );

  $bet = isset($request_type['bet'])
    ? htmlspecialchars(strip_tags(strval($request_type['bet'])))
    : false
    ;
  if (!$bet)
  {
    $bet = $results[0];
  }

  $current = $results[rand(0, 1)];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Flip coin. Your choice is <?=htmlspecialchars($bet);?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="/static/favicon.ico" sizes="32x32">
</head>
<body>
<p><a href="/">&lt; Back</a></p>
<h2>You <?= ($current == $bet) ? "won" : "lost" ?>!</h2>
<p>Your bet: <?=$bet?>.</p>
<p>Toss result: <?=$current?>!</p>

<form method="GET" action="/flip_coin.php">
<input type="hidden" name="bet" value="heads">
<input type="submit" value="Bet on heads!">
</form>

<form method="GET" action="/flip_coin.php">
<input type="hidden" name="bet" value="tails">
<input type="submit" value="Bet on tails!">
</form>

<p><small>Imitation page. Copyright &copy; <? print(gmdate('Y')); ?>, k6.io</small></p>

</body>
</html>
