<?php
 
class StudentController extends Controller
{
    // 
    public function login()
    {
        $this->assign('title', 'Login Page');
        $this->render();
    }

    public function signup()
    {
        $this->assign('title', 'Search');
        $this->render();
    }

    public function logout()
    {

        $this->assign('title', 'Login Page');
        $this->render();
    }
}