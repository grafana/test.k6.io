<?
  $docs = array(
    'Load Impact - Web site load testing from the cloud',
    'Google - We like ads',
    'Yahoo - Are we media or tech?',
    'Facebook - We know who you are',
    'Twitter - The fail-whale is heavy'
  );

  $query = $_REQUEST['q'];
  $results = array();

  if ($query)
  {
    $docids = array();
    $qwords = explode(' ', $query, 10);
    foreach ($qwords as $w)
    {
      foreach ($docs as $i => $d)
      {
        if (false !== strstr(strtolower($d), strtolower($w)) && !in_array($i, $docids))
        {
          $docids[] = $i;
        }
      }
    }

    foreach ($docids as $d)
    {
      $results[] = $docs[$d];
    }
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Search</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<p><a href="/">&lt; Back</a></p>

<p><small>Hint: try <strong>load impact</strong> or <strong>google</strong></small></p>

<form method="GET" action="/search.php">
<table cellpadding="5" cellspacing="0" border="0" width="1%">
<tr>
  <td>Query:</td><td><input type="text" name="q"></td>
</tr>
</table>
<input type="submit" value="Search!">
</form>

<? if ($query) { ?>

<h2>Results</h2>

<table cellpadding="3" cellspacing="0" border="1" width="50%">
<tr>
  <td width="1%"><b>#</b></td><td><b>Title</b></td>
</tr>
<tr>
<?
  foreach ($results as $i => $result)
  {
?><tr>
  <td><?=$i + 1?></td>
  <td><?=htmlspecialchars($result)?></td>
  </tr><?
  }
?>
</tr>
</table>
<? } ?>

<p><small>Imitation page. Copyright &copy; <? print(gmdate('Y')); ?>, k6.io</small></p>

</body>
</html>
