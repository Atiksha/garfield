<?php

if(isset($_POST['submit']))
{
  include_once 'dbh.php';

  $first = mysqli_real_escape_string($conn,$_POST['first']);
  $last = mysqli_real_escape_string($conn,$_POST['last']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $contact = mysqli_real_escape_string($conn,$_POST['contact']);
  $uid = mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

  //Erroer handler
  //check for empty field
  if (empty($first) || empty($last) || empty($contact) || empty($email) || empty($uid) || empty($pwd) )
  {
      header("Location: ../index.php?signup=empty");
      exit();
  }
  else
  {
    //check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/" , $first) || !preg_match("/^[a-zA-Z]*$/", $last))
    {
      header("Location: ../index.php?signup=invalid");
      exit();
    }
    else
    {
      //check if email is invalid
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        header("Location: ../index.php?signup=email");
        exit();
      }
      else
      {
        $sql ="select * from users where user_uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0)
        {
          header("Location: ../index.php?signup=usertaken");
          exit();
        }
        else
        {
          //hashimg the $dbPassword
          $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //insert the user into database
          $sql= "insert into users(user_first, user_last, user_contact,user_email, user_uid, user_pwd) values('$first','$last','$contact','$email','$uid','$hashPwd');";
          mysqli_query($conn, $sql);
          header("Location: ../index.php?signup=success");
          exit();
        }
      }
    }

  }
}


else
{
  header("Location: ../signup.php");
  exit();

}



 ?>
