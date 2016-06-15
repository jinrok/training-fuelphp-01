<?php
use Fuel\Core\Controller_Template;

class Controller_Templatetest extends Controller_Template{

    // テンプレートファイルのパス。デフォルトはviews直下の template.php。
    public $template = 'templatetest/template.php';

    public function before(){
        // beforeをオーバーライドする場合は、必ず親クラスのbeforeを実行する。
        parent::before();

        $this->current_user = 'Daiki';
    }

    public function action_index(){

        // 各ビュー共通で使用したい変数は set_global で定義
        $this->template->set_global('title','This is template sample.');

        $data = array('user' => $this->current_user);

        $this->template->content = View::forge('templatetest/content',$data);
        $this->template->footer = View::forge('templatetest/footer');
    }
}