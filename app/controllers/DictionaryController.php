<?php

namespace app\controllers;

use app\models\Translate;
use engine\base\Controller;

/**
 * Class DictionaryController
 * @package app\controllers
 */
class DictionaryController extends Controller
{
    public function addAction()
    {
        if (!empty($_POST)){
           $params = [
               'word' => $_POST['word'],
               'trans' => $_POST['trans'],
               'direction' => $_POST['options']
           ];

           $transObj = new Translate;
           $result = $transObj->add($params);

           if ($result){
               $this->view->redirect('/main/dictionary');
           }

        }
        $this->view->render('Добавление новой записи');
    }

    public function showAction()
    {
        $id = explode('/',trim($_SERVER['REQUEST_URI'],'/'))[2];
        $transObj = new Translate;
        $params = ['id' => $id];
        $result = $transObj->getRowById($params);

        $this->view->render('Просмотр записи',[
            'result' => $result
        ]);
    }

    public function updateAction()
    {
        $id = explode('/',trim($_SERVER['REQUEST_URI'],'/'))[2];
        $transObj = new Translate;
        $params = ['id' => $id];
        $row = $transObj->getRowById($params);

        if (!empty($_POST)){
            $data = [
                'word' => $_POST['word'],
                'trans' => $_POST['trans'],
                'direction' => $_POST['options'],
                'id' => $id
            ];
            $result = $transObj->updateRow($data);

            if ($result){
                $this->view->redirect('/main/dictionary');
            }
        }

        $this->view->render('Редактирование Записи',[
            'row' => $row
        ]);
    }

    public function deleteAction()
    {
        $id = explode('/',trim($_SERVER['REQUEST_URI'],'/'))[2];
        $transObj = new Translate;
        $data = ['id' => $id];
        $result = $transObj->deleteRow($data);

        if ($result){
            $this->view->redirect('/main/dictionary');
        }
    }
}