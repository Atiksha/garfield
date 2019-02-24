<?php

session_start();
if(isset($_POST['submit']))
{
  include 'dbh.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['upwd']);

  //error handles
  //check if inputs are empty
  if (empty($uid) || empty($pwd))
  {
  //  window.alert("$uid");
    header("Location: ../index.php?login=emptyyyy");
    exit();
  }
  else
  {
      $sql = "select * from users where user_uid='$uid' OR user_email='$uid'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1)
      {
        header("Location: ../index.php?login=error1");
        exit();
      }
      else
      {
          if($row = mysqli_fetch_assoc($result))
          {
            //De-hashing the password
            $hashPwdCheck = password_verify($pwd, $row['user_pwd']);
            if($hashPwdCheck == false)
            {
              header("Location: ../index.php?login=wrong password or id");
              exit();
            }
            elseif($hashPwdCheck == true)
            {
              //log in the user here

              $_SESSION['u_id'] = $row['user_id'];
              $_SESSION['u_first'] = $row['user_first'];
              $_SESSION['u_last'] = $row['user_last'];
              $_SESSION['u_email'] = $row['user_email'];
              $_SESSION['u_uid'] = $row['user_uid'];
              header("Location: ../index.php?login=sucess");
              exit();
            }
          }
      }
  }
}
else
{
  header("Location: ../index.php?login=error3");
  exit();
}


?>
