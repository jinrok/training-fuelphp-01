<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Hoboniti extends Controller_Hybrid{

    public $template = 'hoboniti/template';

    public function action_index(){
        // 今日のダーリンのデータ取得
        $result = Model_Hoboniti::get_dialy();

        // ビューに引き渡し
        $this->template->menu_top = View::forge('hoboniti/menu-top');
        $this->template->content = View::forge('hoboniti/content');
        $this->template->content->set('result',$result);

        //Debug::dump($result);
    }

    public function get_dialy(){
        // 今日のダーリンのデータ取得
        $this->response(Model_Hoboniti::get_dialy());
    }

}