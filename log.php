<?php
  $mail=$_POST['uname'];
  $pword=$_POST['pword'];

  $con=mysqli_connect('localhost','root','','ors');

  $res=mysqli_query($con,"select name from applicants where mail='$mail' and pword='$pword'");
  $r1=mysqli_num_rows($res);
  if($r1>0)
    {
        header('Location: applicanthome.php');
    }
    else
    {
        $res1=mysqli_query($con,"select name from employer where mail='$mail' and pword='$pword'");
        $r2=mysqli_num_rows($res1);
        if($r2>0)
        {
         header("Location: employerhome.html");
        }   
        else
        {
            $res2=mysqli_query($con,"select name from admin where mail='$mail' and pword='$pword'");
            $r3=mysqli_num_rows($res2);
            if($r3>0)
            {
             header("Location: adminhome.html");
            }
            else
            {
              header("Location: loginhome.html");
            }
        }
    }
?>