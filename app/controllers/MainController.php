<?php

namespace app\controllers;

use engine\base\Controller;
use app\models\Translate;

/**
 * Class MainController
 */
class MainController extends Controller
{
    public function indexAction()
    {
        if (!empty($_POST)) {
            $word = $_POST['word'];
            $direction = $_POST['options'];

            $params = [
                'word' => $word,
                'direction' => $direction
            ];

            $transObj = new Translate;

            if (!empty($word)) {
                $result = $transObj->compareTranslate($params);
            }

            $this->view->render('Мой переводчик', [
                'result' => (!empty($result)) ? $result : 'Ошибка Перевода',
                'word' => (!empty($_POST['word'])) ? $_POST['word'] : ''
            ]);
        }else{
            $this->view->render('Мой переводчик', [
                'result' => '',
                'word' => ''
            ]);
        }
    }

    public function dictionaryAction()
    {
        $transObj = new Translate;

        if (empty($_SESSION['user'])){
            $this->view->redirect('/');
        }

        $this->view->render('Словарь',[
            'dict' => $transObj->getAll()
        ]);
    }
}