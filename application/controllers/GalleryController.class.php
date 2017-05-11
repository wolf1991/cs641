<?php
 
class GalleryController extends Controller
{
    // 
    public function art()
    {
        $num = rand(1,6);
        $item = (new GalleryModel)->select($num);

        $this->assign('title', 'Art Gallery');
        $this->assign('item', $item);
        $this->render();
    }

    public function photography()
    {
        $num = rand(12,17);
        $item = (new GalleryModel)->select($num);

        $this->assign('item', $item);
        $this->assign('title', 'Photography');
        $this->render();
    }

    public function painting()
    {
        $num = rand(7,11);
        $item = (new GalleryModel)->select($num);

        $this->assign('item', $item);
        $this->assign('title', 'Painting');
        $this->render();
    }
}