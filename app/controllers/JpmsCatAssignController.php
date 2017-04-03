<?php

class JpmsCatAssignController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }


    public function updateAction($item_id){
        
        $data['item'] = Storeitems::findFirst($item_id);
        
        $sub_categories = $this->get_sub_cats_for_dropdown();
        $assign_categories_query = StoreCatAssign::find([
           "item_id = $item_id"
        ]);



        foreach($assign_categories_query as $row){

            $cat_title = Storecategories::findFirst($row->id);

            $parent = $row->cat_id;
            $parent_cat_title = Storecategories::findFirst(["id = $parent"]);
            $assign_categories[$row->cat_id] = $parent_cat_title->cat_title. " > ".$cat_title->cat_title_;
        }

        if (count($assign_categories_query) < 1){
            $assign_categories = "";
        }else{
            $sub_categories = array_diff($sub_categories, $assign_categories);
        }
     //   echo $assign_categories;die;
        $data['query_for_all_subs'] = Storecategories::find();
        $data['item_id'] = $item_id;
        $data['query'] = $assign_categories_query;
        $data['sub_categories'] = $sub_categories;
        $this->view->setVars($data);
    }

    public function get_sub_cats_for_dropdown(){
        $query = Storecategories::find([
         
            "order" => "parent_cat_id"
        ]);

        foreach($query as $row){
            $parent = $row->parent_cat_id;
            $parent_cat_title = Storecategories::findFirst(["id = $parent"]);
            $sub_categories[$row->id] = $parent_cat_title->cat_title. " > ".$row->cat_title;
        }

        if (!isset($sub_categories)) {
            $sub_categories = "";
        }

        return $sub_categories;
    }

      function submitAction($item_id){
        $catassign = new StoreCatAssign();
        $catassign->cat_id = $this->request->getPost('cat_id');
        $catassign->item_id = $item_id;

        if($catassign->save()){
            $this->flash->success("Item was successfuly assigned.");
            $this->response->redirect("jpmscatassign/update/".$item_id);
        }else{
            $mess = "Something's wrong: ";
            $messages = $catassign->getMessages();
            foreach ($messages as $message) {
                $mess .= $message. ". ";
            }
            $this->flash->error($mess);
            $this->response->redirect("jpmscatassign/update/".$item_id);
        }
    }

    public function deleteAction($id){
        $item = StoreCatAssign::findFirst($id);

        $item_id = $item->item_id;
        if($item->delete()){
            $this->flash->success("Assign category deleted.");
            $this->response->redirect("jpmscatassign/update/".$item_id);
        }
    }
}

