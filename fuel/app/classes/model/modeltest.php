<?php

class Model_Modeltest extends Model{
    public static function find_body_by_username($username){

        $data = array(
                array(
                        'date' => '2012/04/08 12:33',
                        'body' => 'イースター'
                ),
                array(
                        'date' => '2012/04/08 07:25',
                        'body' => '花まつり'
                ),
        );

        return $data;
    }
}