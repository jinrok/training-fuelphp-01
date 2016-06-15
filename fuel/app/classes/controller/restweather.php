<?php
use Fuel\Core\Controller_Rest;

/**
 *  RESTコントローラのテスト
 */
class Controller_Restweather extends Controller_Rest {

    public function get_today(){

        // クエリの文字列から値を取得
        $location = Input::get('loc');

        // 本来はモデルを介してデータを取得
        $weather = 'fine';

        // レスポンスを返す
        $this->response(array(
                'location' => $location,
                'weather' => $weather
        ));

        // /restweather/today.json?loc=test でアクセス

    }

}