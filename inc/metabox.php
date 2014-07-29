<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-7-17
 * Time: 下午11:24
 */
$slider_boxinfo = array('title' => 'Slider info', 'id'=>'sliderbox', 'page'=>array('slider_type'), 'context'=>'normal', 'priority'=>'low', 'callback'=>'');

$slider_boxinfo = array('title' => 'Slider info', 'id'=>'sliderbox', 'page'=>array('game_slider_type'), 'context'=>'normal', 'priority'=>'low', 'callback'=>'');
$slider_options[] = array(
    "name" => "link to",
    "desc" => "",
    "id" => "sp_link",
    "size"=> 60,
    "std"=>'',
    "type" => "text"
);
$slider_options[] = array(
    "name" => "Slider picture",
    "desc" => "",
    "std"=>'',
    "size"=>60,
    "button_label"=> 'Upload',
    "id" => "slider_pic",
    "type" => "media"
);

$slider_box = new ashu_meta_box($slider_options, $slider_boxinfo);
//$slider_box = new ashu_meta_box($slider_options, $slider_boxinfo2);

