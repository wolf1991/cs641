<?php
 
class HomeController extends Controller
{
    public function login()
    {
        $this->render();
    }

    public function signup()
    {
        $this->render();
    }

    public function response($type = null)
    {
        switch ($type)
        {
            case "login":
                $userinfo = (new UserModel)->select($_POST['inputEmail3']);
                if (md5($_POST['inputPassword3'])==$userinfo['password'])
                {
                    $_SESSION['loggedin'] = 1;
                    $_SESSION['name'] = $userinfo['name'];
                    header("Location:". APP_URL);
                }
                else{
                    echo "<script> alert('Please check your email and password'); </script>"; 
                    echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                    exit;
                }
                break;
            case "signup":
                $userinfo = array('id' => $_POST['inputEmail3'], 'name' => $_POST['inputName3'],  'password' => md5($_POST['inputPassword3']), 'create_time' => date('Y-m-d H:i:s'));

                if (empty($userinfo['id'])) {
                    echo "<script> alert('Please input an Email'); </script>"; 
                    echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                    exit;
                }else if (empty($userinfo['name'])) {
                    echo "<script> alert('Please input a name'); </script>"; 
                    echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                    exit;
                } else if (empty($userinfo['password'])) {
                    echo "<script> alert('Please input a password.'); </script>"; 
                    echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                    exit;
                } else if ($_POST['inputPassword3'] != $_POST['inputPasswordConfirm3']) {
                    echo "<script> alert('Please confirm your password.'); </script>";
                    echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                    exit;
                }

                $checkuser = (new UserModel)->select($userinfo['id']);
                
                if (empty($checkuser)){
                    $count = (new UserModel)->add($userinfo);
                } else {
                    echo "<script>javascript: alert('This email has already signed.');</script>";
                    echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                    exit;
                }
                
                $_SESSION['loggedin'] = 1;
                $_SESSION['name'] = $_POST['inputName3'];
                echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                break;
            case "logout":
                unset($_SESSION['name']);
                $_SESSION['loggedin'] = 0;
                echo "<meta http-equiv='Refresh' content='0;URL=". APP_URL. "'>";
                break;

        }
        exit;
    }

    public function about()
    {
        $this->render();
    }
    public function involved()
    {
        $this->render();
    }
}