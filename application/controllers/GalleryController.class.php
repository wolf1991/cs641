<?php
 
class GalleryController extends Controller
{
    // 
    public function art()
    {
        $this->assign('title', 'Art Gallery');
        $this->render();
    }

    public function photography()
    {
        $this->assign('title', 'Photography');
        $this->render();
    }

    public function painting()
    {

        $this->assign('title', 'Painting');
        $this->render();
    }
}