<?php

class JpmsCategoriesController extends ControllerBase
{

    public function indexAction()
    {
    	// $data['categories'] = Storecategories::find();
    	// $this->view->setVars($data);
        // $parent_cat_id = $this->dispatcher->getActionName();
        $params = $this->dispatcher->getParams();

        if ($params){
            foreach ($params as $row => $value) {
                if (is_numeric($value)){
                    $parent_cat_id = $value;
                }else{
                    $parent_cat_id =  0;
                }
            }
        }else{
           $parent_cat_id = 0;
        }

        // echo $parent_cat_id; die;

        $data['categories'] = Storecategories::find([
            "parent_cat_id = $parent_cat_id"           
        ]);
        // $data['categoriess'] = Storecategories::find();
        // $data['total_count'] = count($data['categories']);
        $this->view->setVars($data);
    }

    public function createAction(){
    	$data['categoriess'] = Storecategories::find();
    	$this->view->setVars($data);
    }

    public function submitAction(){
    	 if ($this->request->isPost()){
            $category = new Storecategories();
            $category->cat_title = $this->request->getPost('cat_title');
            $category->parent_cat_id = $this->request->getPost('category');
            $category->cat_url = $this->URLGenerator($this->request->getPost("cat_title"));
            $cat_check = Storecategories::find([
               "parent_cat_id = $category->parent_cat_id"
            ]);

            $category->priority = count($cat_check) + 1;

            if($category->save()){
                $this->flash->success("Category was successfully saved.");
                $this->response->redirect("jpmscategories");
            }
            else{
                $mess = "Something's wrong: ";
                $messages = $category->getMessages();
                foreach($messages as $message){
                    $mess .= $message. ". ";
                }
                $this->flash->error($mess);
                return $this->response->redirect("jpmscategories");
            }
        }else{
            return $this->response->redirect("jpmscategories");
        }
    }

    public function editAction($id){
    	$data['category'] = Storecategories::findFirst($id);
//        echo count($data['category']);die;
        $parent_cat_id = $data['category']->parent_cat_id;

        $current_cat = Storecategories::findFirst([
            "id = $parent_cat_id"
        ]);

        $data['categories'] = Storecategories::find();
        $data['current_parent_cat_title'] = $current_cat->cat_title;
        $data['current_parent_cat_id'] = $current_cat->id;
        $data['id'] = $id;
        $this->view->setVars($data);
    }

    public function edit_submitAction($id){
    	   $category = Storecategories::findFirst($id);
        $category->cat_title = $this->request->getPost("cat_title");
        $parent_cat = $this->request->getPost("category");

        $category->parent_cat_id = $parent_cat;
        $category->cat_url = $this->URLGenerator($this->request->getPost("cat_title"));
        if($category->save()){
            $this->flash->success("Category was successfuly updated.");
            $this->response->redirect("jpmscategories");
        }else{
                $mess = "Something's wrong: ";
                $messages = $category->getMessages();
                foreach($messages as $message){
                    $mess .= $message. ". ";
                }
                $this->flash->error($mess);
                return $this->response->redirect("jpmscategories");
            }
    }

    public function viewAction(){
        // echo "sdfs";die;
        $param = $this->dispatcher->getParams();
        
        foreach ($param as $key => $value) {
            $cat_url =  $value;
        }


        $data['items'] = $this->modelsManager->createQuery("SELECT
        storeitems.item_title,
        storeitems.item_url,
        storeitems.big_pic
        FROM
        storecatassign
        INNER JOIN storecategories ON storecatassign.cat_id = storecategories.id
        INNER JOIN storeitems ON storeitems.id = storecatassign.item_id
        where storecategories.cat_url = :cat_url:
        ");

        $data['items']->cache(
            [
                "key" => $cat_url            
            ]
        );
        $data['items'] = $data['items']->execute(
            [
                "cat_url" => "$cat_url"
            ]
        );

//        $cat_item = Storecategories::findFirst([
//            "cat_url = :param:",
//            "bind" => [
//                param => $cat_url
//            ]
//        ]);

        if (!count($data['items'])) {
            return $this->response->redirect('index');
//        }else{

//            $data['cat_title'] = $cat_item->cat_title;
//
//        $data['items'] = $this->modelsManager->executeQuery("SELECT * FROM storecatassign WHERE storecatassign.cat_id = ?1",
//            [
//                1 => $cat_item->id
//        ]);
        }
            $this->view->setVars($data);


    }

}

