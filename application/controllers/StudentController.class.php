<?php
 
class StudentController extends Controller
{
    // 
    public function login()
    {
        $this->assign('title', 'Login Page');
        $this->render();
    }

    public function search()
    {

        $this->assign('title', 'Login Page');
        $this->assign('items', $items);
        $this->render();
    }

    public function searchlist()
    {

        $this->assign('title', 'Login Page');
        $this->assign('items', $items);
        $this->render();
    }

    public function lists()
    {
        $this->render();
    }

    public function register()
    {
        $this->render();
    }
}