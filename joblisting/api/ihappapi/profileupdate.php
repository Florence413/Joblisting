<?php
if (isset($_POST['submitprofile'])) {

$firstname = strip_tags($_POST['firstname']);
$middlename = strip_tags($_POST['middlename']);
$lastname = strip_tags($_POST['lastname']);
$gender = strip_tags($_POST['gender']);
$education = strip_tags($_POST['education']);
$pimage = strip_tags($_POST['pimage']);
        $allowed = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'txt', 'xls','docx');

        $file_name = $_FILES['pimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['pimage']['tmp_name'];

        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/' . md5(time()) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path); 
    try
    {
                $stmt = $auth_user->runQuery("DELETE FROM `profile` WHERE `user_id`= '$user_id' ");
        $stmt->bindparam(":user_id", $user_id);
        $stmt->execute();
        if($auth_user->p_post($user_id, $firstname, $middlename, $lastname, $gender, $education, $file_path))
        {
        }
    }catch(PDOException $e){
        $e->getMessage();
    }
}
}	
?>
 







