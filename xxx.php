<!--<form method="POST" enctype="multipart/form-data">-->
<!--<!--    <input type="hidden" name="MAX_FILE_SIZE" value="4000000">-->
<!--    Send this file: <input name="userfile" type="file">-->
<!--    <input type="submit" name="send_file" value="Send File">-->
<!--</form>-->

<?php
//ini_set('upload_max_filesize', '200M');
//ini_set('post_max_size', '200M');
//
//if (isset($_FILES['userfile'])) {
//    $userfile = $_FILES['userfile'];
//}
//if (isset($_POST['send_file'])) {
//    $send_file = $_POST['send_file'];
//}
//
////print_r($_FILES);
////exit;
//
////downloading files
//if (isset($send_file) && isset($userfile)) {
//    if (is_uploaded_file($userfile['tmp_name'])) {
//
//        $filename = basename($userfile['name']);
//        $uploaddir = "uploads/";
//        $uploadfile = $uploaddir . $filename;
////        print_r($uploadfile);
//        $done = move_uploaded_file($userfile['tmp_name'], $uploadfile);
//        chmod($uploadfile,0777);
//        if($done) {
//            echo 'agon !!! <br><br>';
//        }
//    }
//}
//
//echo 'upload_max_filesize: ' . ini_get('upload_max_filesize') . '<br>';
//echo 'post_max_size: ' . ini_get('post_max_size') . '<br>';

?>