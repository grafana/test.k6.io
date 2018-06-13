<?
  $request_type = &$_POST;
  //$request_type = &$_GET;

  $login = isset($request_type['login'])
    ? strval($request_type['login'])
    : false
    ;

  $password = isset($request_type['password'])
    ? strval($request_type['password'])
    : false
    ;

  //echo "login:" . $login . ", password:". $password . "<br>";

  $logged_in = false;

  if ($login && $password)
  {
    if ($login == "admin" && $password == "123")
    {
      $logged_in = true;
      setcookie('uid', '3221', time()+3600, '/', 'test.loadimpact.com', false, true);
      setcookie('sid', '39b77ac6-39c4-4c43-98b3-6b2816682036', time()+3600, '/', 'test.loadimpact.com', false, true);
    }
    else if ($login == "test_user" && $password == "1234")
    {
      $logged_in = true;
      setcookie('uid', '2233', time()+3600, '/', 'test.loadimpact.com', false, true);
      setcookie('sid', '45b77ac6-39c4-4c43-98b3-6b2816682036', time()+3600, '/', 'test.loadimpact.com', false, true);
    }
  }

  if (!$logged_in)
  {
    setcookie('uid', 'bad', time()+3600, '/', 'test.loadimpact.com', false, true);
    setcookie('sid', 'bad', time()+3600, '/', 'test.loadimpact.com', false, true);
  }

  if (isset($request_type['redir']))
  {
    header('Location: /my_messages.php');
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?
  //echo "login:" . $login . ", password:". $password . "<br>";
  if (!$login)
  {
    print "error: no login!";
  }
  else
  {
    if (!$password)
    {
      print "error: no password!";
    }
    else
    {
      if (!$logged_in)
      {
        print "error: invalid login/password combination!";
      }
      else
      {
        print "user $login successfully authorized.";
      }
    }
  }
?>
<p><small>Imitation page. Copyright &copy; <? print(date('Y')); ?>, Loadimpact.com</small></p>
</body>
</html>
