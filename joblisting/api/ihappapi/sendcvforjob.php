<?php
if (isset($_POST['submitcvforjob'])) {

    $user_id = strip_tags($_POST['user_id']);
    $jobs_id = strip_tags($_POST['jobs_id']);
    $userdescription = strip_tags($_POST['userdescription']);
    $cv = strip_tags($_POST['cv']);


        $allowed = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'txt', 'xls' ,'docx');

        $file_name = $_FILES['cv']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['cv']['tmp_name'];

        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/' . md5(time()) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

    try
    {
        if($auth_user->submitcv($user_id, $jobs_id, $userdescription, $file_path))
        {

        }
    }catch(PDOException $e){
        $e->getMessage();
    }
}
}	


?>
