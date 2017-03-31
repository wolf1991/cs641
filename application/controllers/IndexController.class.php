<?php
 
class IndexController extends Controller
{
    function index()
    {
        $this->assign('title', 'Index');
        $this->assign('content', 'sidebar');
        $this->render();
    }
 }