<?php
 
class IndexController extends Controller
{
    function index()
    {
        $this->assign('title', 'Index');
        $this->assign('content', 'This is showing on sidebar');
        $this->render();
    }
 }