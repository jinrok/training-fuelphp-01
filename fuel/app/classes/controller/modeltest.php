<?php

use Fuel\Core\Controller;

class Controller_Modeltest extends Controller{

    public function action_index(){

        // モデルの呼び出し
        $result = Model_Modeltest::find_body_by_username('foo');

        Debug::dump($result);
    }
}