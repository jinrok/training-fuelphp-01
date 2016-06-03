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
