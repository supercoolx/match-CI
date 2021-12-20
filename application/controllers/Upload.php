<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	
	
	}	
    public function image()
    {

		$file = $_FILES['userImg'];
		$path_absolute = __PATH__.'/upload/speaking/'.date("Ymd");

		$path = 'upload/speaking/'.date("Ymd");
		$new_path = 'upload/speaking/'.date("Ymd");
		if(!is_dir($path_absolute))
		{
			if (!mkdir($path_absolute,0777,true))
			{

				exit(callback('ファイルのアップロードに失敗しました'));
			}
		}
		$str = date("mdHis").rand(10000,99999).substr($file['name'],strripos($file['name'],'.'));
		$head_url = $path_absolute.'/'.$str;
		if(move_uploaded_file($file['tmp_name'],$head_url))
		{
			exit(callback_img(base_url($new_path.'/'.$str),$file['name'],true));
		}

    }
 
    public function removedfile()
    {
		$params = $_POST;

		$file_info = json_decode($params['path'],true);
	
        $image = __PATH__.'/'.$file_info['image'];
		if (!unlink($image)){
			exit(callback('ファイルの削除に失敗しました'));
		}

    }



    public function text_image()
    {

		$file = $_FILES['myFile'];

		$path_absolute = __PATH__.'/upload/speaking/'.date("Ymd");
		$path = 'upload/speaking/'.date("Ymd");
		if(!is_dir($path_absolute))
		{
			if (!mkdir($path,0777,true))
			{

				exit(callback('ファイルのアップロードに失敗しました'));
			}
		}
		$str = date("mdHis").rand(10000,99999).substr($file['name'],strripos($file['name'],'.'));
		$head_url = $path_absolute.'/'.$str;

		if(move_uploaded_file($file['tmp_name'],$head_url))
		{

			exit(json_encode(['errno'=>0,'data'=>[['url'=>base_url($path.'/'.$str),'alt'=>'','href'=>'']]]));
		}

    }
}
