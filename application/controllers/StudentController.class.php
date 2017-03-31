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
        $this->assign('title', 'Search');
        $this->render();
    }

    public function searchlist()
    {

        $this->assign('title', 'Login Page');
        $this->render();
    }

    public function lists()
    {
        $students = (new StudentModel)->selectAll();

        $this->assign('title', 'Lists');
        $this->assign('students', $students);
        $this->render();
    }

    public function register()
    {
        $subjects = (new SubjectModel)->selectAll();

        $this->assign('title', 'Register');
        $this->assign('subjects', $subjects);
        $this->render();
    }
}