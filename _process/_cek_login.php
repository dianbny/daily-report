<?php
    //error_reporting(0);

    //Require
    require_once "../_config/_const.php";
    require_once "../_config/_cekData.php";
    
    //Inisialisasi
    $cekData = new _cekData();

    //Waktu 
    date_default_timezone_set("Asia/Kuala_Lumpur");
    setlocale(LC_ALL, 'id-ID', 'id_ID');

    //Filter Data
    function filterInput($data){
        $data = trim($data);
        $data = strip_tags($data);
        $data = addslashes($data);
        return $data;
    }

    //Cek Login Administrator
    if($_GET['action'] == 'cek-login'){

        //Jika Submit
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            session_start();
            $username = filterInput($_POST['username']);
            $password = md5($_POST['password']);

            if($cekData->cekLogin($username, $password, 'PIC') == TRUE){

                $_SESSION['status-login'] = "success";
                $_SESSION['level'] = "administrator";
                $_SESSION['username'] = $username;

                header('location:'.BASEURL.'/dashboard-pic');
            }
            else {
                $_SESSION['status'] = "error";
                $_SESSION['msg'] = "Username or password incorrect !";

                header('location:'.BASEURL.'/login');
            }
        }
        else {
            
            header('location:'.BASEURL.'/login');
        }


    }