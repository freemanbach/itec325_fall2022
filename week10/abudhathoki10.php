<?php
/* Include the database connection script. */
include 'pdo.php';

/* Set the "cost" parameter to 12. */
$options = ['cost' => 12];

/* Login status: false = not authenticated, true = authenticated. */
$login = FALSE;

/* Username from the login form. */
$username = $_POST['username'];

/* Password from the login form. */
$password = $_POST['password'];

/* Remember to validate $username and $password. */

/* Look for the username in the database. */
$query = 'SELECT * FROM accounts WHERE (account_name = :name)';

/* Values array for PDO. */
$values = [':name' => $username];

/* Execute the query */
try
{
  $res = $pdo->prepare($query);
  $res->execute($values);
}
catch (PDOException $e)
{
  /* Query error. */
  echo 'Query error.';
  die();
}

$row = $res->fetch(PDO::FETCH_ASSOC);

/* If there is a result, check if the password matches using password_verify(). */
if (is_array($row))
{
  if (password_verify($password, $row['account_passwd']))
  {
    /* The password is correct. */
    $login = TRUE;
	
	/* Check if the hash needs to be created again. */
    if (password_needs_rehash($row['account_passwd'], PASSWORD_DEFAULT, $options))
    {
      $hash = password_hash($password, PASSWORD_DEFAULT, $options);
      
      /* Update the password hash on the database. */
      $query = 'UPDATE accounts SET account_passwd = :passwd WHERE account_id = :id';
      $values = [':passwd' => $hash, ':id' => $row['account_id']];
      
      try
      {
        $res = $pdo->prepare($query);
        $res->execute($values);
      }
      catch (PDOException $e)
      {
        /* Query error. */
        echo 'Query error.';
        die();
      }
    }
  }
}
?>