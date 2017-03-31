<?php
 
class StudentController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function login()
    {

        $this->assign('title', 'Login Page');
        $this->assign('items', $items);
        $this->render();
    }

    public function search()
    {
        $items = (new ItemModel)->selectAll();

        $this->assign('title', 'Login Page');
        $this->assign('items', $items);
        $this->render();
    }

    public function searchlist()
    {
        $items = (new ItemModel)->selectAll();

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