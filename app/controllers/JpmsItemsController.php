<?php

class JpmsItemsController extends ControllerBase
{

    public function indexAction()
    {
    	$data['items'] = Storeitems::find();
    	$this->view->setVars($data);
    }

    public function createAction(){

    }

    public function submitAction(){
    	if ($this->request->isPost()){
            $item = new Storeitems();
            $item->item_title = $this->request->getPost("item_title");
            $item->item_description = $this->request->getPost("item_description");
            $item->status = $this->request->getPost("status");
            $item->big_pic = "";
            $item->small_pic = "";
            $item->item_url = $this->URLGenerator($this->request->getPost("item_title"));

            if($item->save()){                
                $this->flash->success("New Item was successfuly added");
                return $this->response->redirect("jpmsitems/edit/".$item->id);
            }else{
                $mess = "Something's wrong: ";
                $messages = $item->getMessages();
                foreach($messages as $message){
                    $mess .= $message. ". ";
                }
                $this->flash->error($mess);
                return $this->response->redirect("jpmsitems");
            }
        }else{
            return $this->response->redirect("jpmsitems");
        }
    }

    public function editAction($id){
    	$data['item'] = Storeitems::findFirst($id);
    	$this->view->setVars($data);
    }

    public function edit_submitAction($id){
    	if ($this->request->isPost()){
            $item = Storeitems::findFirst($id);
            $item->item_title = $this->request->getPost("item_title");
            $item->item_description = $this->request->getPost("item_description");
            $item->status = $this->request->getPost("status");            
            $item->item_url = $this->URLGenerator($this->request->getPost("item_title"));

            if($item->save()){
                $this->flash->success("Item was successfuly edited");
                return $this->response->redirect("jpmsitems");
            }else{
                $mess = "Something's wrong: ";
                $messages = $item->getMessages();
                foreach($messages as $message){
                    $mess .= $message. ". ";
                }
                $this->flash->error($mess);
                return $this->response->redirect("jpmsitems");
            }
        }else{
            return $this->response->redirect("jpmsitems");
        }
    }

     public function upload_imageAction($id){
        $data['id'] = $id;
        $this->view->setVars($data);
    }

    public function uploadimage_submitAction($id){
        $item = Storeitems::findFirst($id);
        
        if ($this->request->isPost()) {
            $files = $this->request->getUploadedFiles();
            foreach ($files as $file) {
                $filename = $file->getName();
                $item->big_pic = $filename;
                
                $big_pic_path_filename = "files/big_pics/".$filename;
                
                if ($file->moveTo($big_pic_path_filename)) {
                    $img = new Phalcon\Image\Adapter\Gd($big_pic_path_filename); 
                    $small_pic_filename = "small_". $filename;
                    $path_mini = "files/small_pics/".$small_pic_filename;

                    $img->resize(400,400);
                    if ($img->save($path_mini, 100)) {
                        $item->small_pic = $small_pic_filename;
                        $item->save();

                        $this->flash->success("Image was successfully uploaded.");
                        $this->response->redirect("jpmsitems/edit/".$id);
                    }
                }             
            }
        }        
    }

    public function delete_imageAction($id){
        $item = Storeitems::findFirst($id);
        $big_pic = $item->big_pic;
        $small_pic = $item->small_pic;

        $big_pic_path = "./files/big_pics/".$big_pic;
        $small_pic_path = "./files/small_pics/".$small_pic;

        //attemp to remove images
        if (file_exists($big_pic_path)) {
            unlink($big_pic_path);
        }
        if (file_exists($small_pic_path)) {
            unlink($small_pic_path);
        }

        echo file_exists(($big_pic_path));
        $item->big_pic = "";
        $item->small_pic = "";

        if($item->save()){
            $this->flash->success("Image was successfully deleted.");
            $this->response->redirect("jpmsitems/edit/".$id);
        }
    }

    public function viewAction(){
        //echo "sdfs";die;
        $param = $this->dispatcher->getParams();
        
        foreach ($param as $key => $value) {
            $item_url =  $value;
        } 



        $data['item'] = Storeitems::findFirst([
            "item_url = :param:",
            "bind" => [
                param => $item_url
            ]
        ]);

        if (!count($data['item'])) {
            return $this->response->redirect('index');
        }
        $data['item_title'] = $data['item']->item_title;            
        $this->view->setVars($data);
        
        // print_r($this->dispatcher->getParams('cat_url'));die;
        // $cat_url = $this->dispatcher->getParams('cat_url');
        // echo $cat_url;
    }

    public function sendAction(){
        if ($this->request->isPost()) {
            require_once('../vendor/autoload.php');
            $config = [
                'driver'     => 'smtp',
                'host'       => 'smtp.gmail.com',
                'port'       => 465,
                'encryption' => 'ssl',
                'username'   => 'bretservilon@gmail.com',
                'password'   => 'hart1379email',
                'from'       => [
                    'email' => 'example@gmail.com',
                    'name'  => 'Root'
                ]
            ];

            $mailer = new \Phalcon\Ext\Mailer\Manager($config);

            $message = $mailer->createMessage()
                ->to('bretservilon@gmail.com', 'Root')
                ->subject('Inquiry from website')
                ->replyTo($this->request->getPost('email'),$this->request->getPost('name'))
                ->content($this->request->getPost('message') . "<br>" . "Phone: ".$this->request->getPost('phone'));


    // Set the Cc addresses of this message.
    //        $message->cc('example_cc@gmail.com');

    // Set the Bcc addresses of this message.
    //        $message->bcc('example_bcc@gmail.com');

    // Send message
            $result = $message->send();
            if($result){
                $this->flash->success("Your message has been sent.");
                return $this->response->redirect('index#contact');
            }
        }else{
            return $this->response->redirect('index');
        }
        
    }

}

