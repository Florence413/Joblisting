<?php
if(isset($_POST['btnlogin']))
{
  $uname = strip_tags($_POST['txt_uname_email']);
  $umail = strip_tags($_POST['txt_uname_email']);
  $upass = strip_tags($_POST['txt_password']);


  if($user->doLogin($uname, $umail, $upass))
  {
    echo '<script type="text/javascript">window.location = "home.php"</script>';
  }
  else
  {
    ?>
    <p style="color:red:background:white;margin:10px;position:top;top:0px;z-index:100001px;">User not found</p>
    <?php
  } 
}
?>