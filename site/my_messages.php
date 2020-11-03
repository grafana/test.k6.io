<?
  //$request_type = &$_POST;
  //$request_type = &$_GET;

  $uid = isset($_COOKIE['uid']) ? strval($_COOKIE['uid']) : false;
  $sid = isset($_COOKIE['sid']) ? strval($_COOKIE['sid']) : false;
  //echo "uid:" . $uid . ", sid:". $sid . "<br>";

  $messages = false;
  $username = false;
    
  $csrftoken = base64_encode(strval(rand(100000000, 999999999)));
  setcookie('csrf', $csrftoken, time()+3600, '/', '##WEB_HOSTNAME##', false, true); 
  
  if ($uid && $sid)
  {
    if ($uid == "3221" && $sid == "39b77ac6-39c4-4c43-98b3-6b2816682036")
    {
      $username = "admin";
      $messages = array(
         array(
           'from' => 'DenyHosts',
           'subject' => 'DenyHosts report on ##WEB_HOSTNAME##',
          ),
         array(
           'from' => 'Twitter',
           'subject' => 'LoadImpact is now following you on Twitter',
          ),
         array(
           'from' => 'Mail Delivery Subsystem',
           'subject' => 'Delivery Status Notification (Failure)',
          ),
        ); 
    }
    else if ($uid == "2233" && $sid == "45b77ac6-39c4-4c43-98b3-6b2816682036")
    {
      $username = "test_user";
      $messages = array(
         array(
           'from' => 'Google.com',
           'subject' => 'You\'re hired!',
          ),
        );
    }
  }
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>My messages</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="/static/favicon.ico" sizes="32x32">
</head>
<body>

<p><a href="/">&lt; Back</a></p>

<? if (!$messages) { ?>

<h2>Unauthorized</h2>
<p><small>Hint: try <code>admin</code>/<code>123</code> or
<code>test_user</code>/<code>1234</code></small></p>

<form method="POST" action="/login.php">
<input type="hidden" name="redir" value="1"> 
<input type="hidden" name="csrftoken" value="<?= $csrftoken ?>">
<table cellpadding="5" cellspacing="0" border="0" width="1%">
<tr>
  <td>Login:</td><td><input type="text" name="login" autocomplete="off"></td>
</tr>
<tr>
  <td>Password:</td><td><input type="password" name="password" autocomplete="off"></td>
</tr>
</table>
<input type="submit" value="Go!">
</form>

<? } else { ?>

<h2>Welcome, <?=$username?>!</h2>

<table cellpadding="3" cellspacing="0" border="1" width="50%">
<tr>
  <td width="1%"><b>#</b></td><td><b>From:</b></td><td><b>Subject:</b></td>
</tr>
<tr>
<?
  foreach ($messages as $i => $message)
  {
?><tr>
  <td><?=$i + 1?></td>
  <td><?=htmlspecialchars($message['from'])?></td>
  <td><?=htmlspecialchars($message['subject'])?></td>
  </tr><?
  }
?>
</tr>
</table>
<br> 
<form method="POST" action="/login.php">
<input type="hidden" name="redir" value="1"> 
<input type="hidden" name="csrftoken" value="<?= $csrftoken ?>">
<input type="submit" value="Logout">
</form>
<? } ?>

<p><small>Imitation page. Copyright &copy; <? print(gmdate('Y')); ?>, k6.io</small></p>

</body>
</html>
