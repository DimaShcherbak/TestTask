<?php

namespace application\controllers;

//use application\models\Admin;
use application\core\Controller;
use application\models\Banner;

class BannersController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function indexAction() {
        $bannerModel = new Banner();
        $banners = $bannerModel->getList();
        $this->view->render('indexBanner', ['banners' => $banners]);
    }

    public function editAction()
    {
        //TODO: edit
        echo "hello";
    }

    public function addAction() {
        $this->view->render('addBaner');



    }
    public function createAction() {



    }
    public function deleteAction() {


    }
}

