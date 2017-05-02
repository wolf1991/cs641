<?php
 
class UserController extends Controller
{
    // 
    public function login()
    {
        $this->assign('title', 'Login Page');
        $this->render();
    }

    public function signup()
    {
        $this->assign('title', 'Sign Up');
        $this->render();
    }

    public function logout()
    {

        $this->assign('title', 'Logout');
        $this->render();
    }
}