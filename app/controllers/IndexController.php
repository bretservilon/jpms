<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$data['weighs'] = Storecategories::findByParentCatId(10);
    	$this->view->setVars($data);
    }

}

