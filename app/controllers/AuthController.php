<?php

namespace app\controllers;

use app\models\User;
use engine\base\Controller;

/**
 * Class AuthController
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function loginAction()
    {
        if (!empty($_POST)){
            $params = [
                'email' => $_POST['email'],
                'password' => $_POST['pass']
            ];

            $userObj = new User;
            $result = $userObj->getUser($params);
            $_SESSION['user'] = json_encode($result);

            if (!empty($result)){
                $this->view->redirect('/main/dictionary');
            }
        }
        $this->view->render('Страница Авторизации');
    }
}