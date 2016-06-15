<?php
use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Viewtest extends Controller{

    /**
     *  Viewの呼び出し方
     */
    public function action_index(){
        // forge時に一緒に渡す方法

        $data = array();
        $data['title'] = 'this is view sample';
        $data['username'] = 'daiki';

        return View::forge('viewtest/index', $data);
    }

    /**
     * Viewの呼び出し方その2
     */
    public function action_set(){
        // setメソッドで呼び出す方法

        $view = View::forge('viewtest/index');
        $view->set('title','this is view sample');
        $view->set('username','daiki');

        return $view;
    }

    /**
     * HTMLエスケープしないデータをビューに渡す
     */
    public function  action_unescape(){

        $view = View::forge('viewtest/index');
        $view->set('title','this is view sample');
        $view->set_safe('username','<b>daiki</b>');

        // 下でも同じ
        //$view->set('username','<b>daiki</b>', false);

        return $view;
    }
}