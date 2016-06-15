<?php

class Model_Hoboniti extends Model{
    public static function get_dialy(){
        // URLパラメータ取得
        $offset = intval(Input::get('offset', 0));
        $limit  = intval(Input::get('limit', 100));

        $limit  = $limit > 5000 ? 5000 : $limit;

        $query = DB::select()->from('hoboniti_darlings')->order_by('id','desc')->limit($limit)->offset($offset);
        return $query->execute()->as_array();
    }
}