<?php
 
class ItemController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        $items = (new GalleryModel)->selectAll();

        $this->assign('title', 'Gallery panel');
        $this->assign('items', $items);
        $this->render();
    }
    
    // 添加记录，测试框架DB记录创建（Create）
    public function add()
    {
        if (isset($_POST['submit'])) {  
            $form_description = $_POST['form_description'];
            $form_data_name = $_FILES['form_data']['name'];
            $form_data_size = $_FILES['form_data']['size'];
            $form_data_type = $_FILES['form_data']['type'];
            $form_data = $_FILES['form_data']['tmp_name'];

            $data = addslashes(fread(fopen($form_data, "rb"), filesize($form_data)));  
        // //取得上傳檔案資訊
        // $filename = $_FILES['image']['name'];
        // $tmpname = $_FILES['image']['tmp_name'];
        // $filetype = $_FILES['image']['type'];
        // $filesize = $_FILES['image']['size'];    
        // $file = NULL;
        
        // if(isset($_FILES['image']['error'])){    
        //     if($_FILES['image']['error']==0){                                    
        //         $instr = fopen($tmpname,"rb" );
        //         $file = addslashes(fread($instr,filesize($tmpname)));        
        //     }
        // }
            $new_image = array('bin_data' => $data, 'name' => $form_data_name, 'author' => $form_data_name, 'size' => $form_data_size, 'type' => $form_data_type, 'description' => $form_description);
        

            

            $count = (new GalleryModel)->add($new_image);
        }
        //新增圖片到資料庫

        $this->assign('title', '添加成功');
        $this->assign('count', $count);
        $this->render();
    }
    
    // 查看记录，测试框架DB记录读取（Read）
    public function view($id = null)
    {  
 
        $item = (new GalleryModel)->selectImg($id);

        ChromePhp::log($item['type']);
        
        $data = $item['bin_data'];
        $type = $item['type'];

        // header( "Content-type: $type");  
        // echo $data;  
        $this->assign('title', $id);
        // $this->assign('item', $item);
        $this->render();
    }
    
    // 更新记录，测试框架DB记录更新（Update）
    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);
        $count = (new ItemModel)->update($data['id'], $data);

        $this->assign('title', '修改成功');
        $this->assign('count', $count);
        $this->render();
    }
    
    // 删除记录，测试框架DB记录删除（Delete）
    public function delete($id = null)
    {
        $count = (new ItemModel)->delete($id);

        $this->assign('title', '删除成功');
        $this->assign('count', $count);
        $this->render();
    }
}