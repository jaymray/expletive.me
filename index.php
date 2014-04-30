<?php
if (get_magic_quotes_gpc())
{
  $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
  while (list($key, $val) = each($process))
  {
    foreach ($val as $k => $v)
    {
      unset($process[$key][$k]);
      if (is_array($v))
      {
        $process[$key][stripslashes($k)] = $v;
        $process[] = &$process[$key][stripslashes($k)];
      }
      else
      {
        $process[$key][stripslashes($k)] = stripslashes($v);
      }
    }
  }
  unset($process);
}

if (isset($_GET['addprofanity']))
{
  include 'index.html';
  exit();
}

try
{
  $pdo = new PDO('mysql:host=hostname;dbname=database', 'username', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}


catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

if (isset($_POST['profanetext']))
{
  try
  {
    $sql = 'INSERT INTO profane SET
        profanetext = :profanetext,
        profanedate = CURDATE()';
    $s = $pdo->prepare($sql);
    $s->bindValue(':profanetext', $_POST['profanetext']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted profanity: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}


try
{
  $sql = 'SELECT profanetext FROM profane';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error gathering profanities: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $profanes[] = $row['profanetext'];
}

include 'expletives.html.php';

  
