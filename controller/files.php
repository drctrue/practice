<?php

class Files extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $userfile = $_FILES['userfile'];
        $send_file = $_POST['send_file'];
        $recent_controller = $_GET['url'];
        $save_file = $_GET['save'];
        $delete = $_GET['del'];
        $file_id = $_GET['id'];

        //downloading files
        if (isset($send_file) && isset($userfile)) {
            if (is_uploaded_file($userfile['tmp_name'])) {
                $filename = basename($userfile['name']);
                $uploaddir = "public/uploads/";
                $uploadfile = $uploaddir . $filename;
                $moved_files = move_uploaded_file($userfile['tmp_name'], $uploadfile);
                if ($moved_files) {
                   $this->model->addFile($uploadfile);
                }
            }
        }
        $files_path = $this->model->getFiles();
        foreach ($files_path as $files) {
            $files_mass[] = array('id' => $files['id'], 'filename' => $files['filename'], 'save' => $recent_controller . '?id=' . $files['id'] . '&save=1', 'del' => $recent_controller . '?id=' . $files['id'] . '&del=1',);
        }
        if (isset($delete) && isset($file_id) && $file_id) {
            if ($this->model->deleteFileOne($file_id)) {
                header('Location: ' . HTTP_SERVER . $recent_controller);
            } else {
                $bad_res = '<strong>Error!</strong>';
            }
        }

        if (isset($save_file) && isset($file_id) && $file_id) {
            foreach ($files_mass as $path) {
                $file_path = $path['filename'];
                $id = $path['id'];
                if ($id == $file_id) {
                    header('X-SendFile: ' . realpath($file_path));
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename=' . basename($file_path));
                    exit;
                }
            }
        }

        $this->view->vars('files', $files_mass);
        $this->view->vars('bad_res', $bad_res);
        $this->view->render('files');
    }

}