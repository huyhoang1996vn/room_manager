<?php
namespace controller\web;
class UserController
{
    public function regedis($function) {
        switch($function) {
            case 'adminlogin' :
                $this->adminlogin();
            break;
            default :
                echo "invalidate function";
            break;
        }
    }
    public function adminlogin(){
        $this->view('admin/login.php');
    }

    function view($view,$parram = null){
        $data = $parram;
        require "view/".$view;
    }
}
