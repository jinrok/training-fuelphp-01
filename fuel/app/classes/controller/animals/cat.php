<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
use Parser\View_Smarty;

/**
 *
 * @author User01
 * Animals Cat で読み出す
 */
class Controller_Animals_Cat extends Controller{

    public function before(){
        // アクションメソッド実行前の共通処理を記述する
    }

    public function after(){
        // アクションメソッド実行の共通処理を記述する
    }

    /**
     *
     * @return \Fuel\Core\View
     */
    public function action_index(){
        $view = View_Smarty::forge('animals/dog.smarty');
        $view->set("cry","にゃー");
        return $view;
    }

    /**
     *
     * @return \Fuel\Core\View
     */
    public function action_heavycry(){
        $view = View::forge('animals/cat');
        $view->set("cry","ぎゃーす");
        return $view;
    }
}
