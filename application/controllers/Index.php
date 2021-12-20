<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

	}	
	public function index()
	{

		$params['body_class'] = 'home';
		if(isset($_GET['type'])){
			$params['type'] = $_GET['type'];

		}
		$params['title'] = '';
	   $this->load->view('index/index/index',$params);
	}
	
    public function contact(){

		$params = $_POST;
        if(empty(trim($params['full_name']))){
             die(json_encode(['code'=>'error','msg'=>'お名前が入力されていません']));
		}
		if(empty(trim($params['slugname']))){
             die(json_encode(['code'=>'error','msg'=>'フリガナが入力されていません']));
		}
		if(!is_email($params['user_email'])){
             die(json_encode(['code'=>'error','msg'=>'メールアドレスのフォーマットが正しくありません']));
		}
		if(empty(trim($params['user_email']))){
             die(json_encode(['code'=>'error','msg'=>'メールアドレスが入力されていません']));
		}

		if(!is_tel_jp($params['user_phone'])){
             die(json_encode(['code'=>'error','msg'=>'携帯番号のフォーマットが正しくありません']));
		}
		if(empty($params['user_phone'])){
             die(json_encode(['code'=>'error','msg'=>'携帯番号が入力されていません']));
		}
		if(empty($params['user_message'])){
             die(json_encode(['code'=>'error','msg'=>'お問い合わせ内容が入力されていません']));
		}

        $params['message'] = nl2br($params['user_message']);
		die(json_encode(['code'=>'successful','msg'=>'ok','param'=>$params]));

    }
    public function recruit_contact(){
		$arr_type = ['1'=>'エンジニア未経験者','2'=>'プロジェクトマネージャー','3'=>'アプリケーションエンジニア','4'=>'ネットワークエンジニア(設計構築)','5'=>'ネットワークエンジニア(運用保守)','6'=>'サーバーエンジニア(設計構築)','7'=>'サーバーエンジニア(運用監視)','8'=>'クラウドエンジニア','9'=>'ゲームエンジニア','10'=>'フロントエンドエンジニア','11'=>'バックエンドエンジニア','12'=>'UIデザイナー','13'=>'プランナー','14'=>'法人営業','15'=>'SES営業代行'];
		$params = $_POST;


        if(empty(trim($params['full_name']))){
             die(json_encode(['code'=>'error','msg'=>'お名前が入力されていません']));
		}
		if(empty(trim($params['slugname']))){
             die(json_encode(['code'=>'error','msg'=>'フリガナが入力されていません']));
		}
		if(!is_email($params['user_email'])){
             die(json_encode(['code'=>'error','msg'=>'メールアドレスのフォーマットが正しくありません']));
		}
		if(empty(trim($params['user_email']))){
             die(json_encode(['code'=>'error','msg'=>'メールアドレスが入力されていません']));
		}

		if(!is_tel_jp($params['user_phone'])){
             die(json_encode(['code'=>'error','msg'=>'携帯番号のフォーマットが正しくありません']));
		}
		if(empty($params['user_phone'])){
             die(json_encode(['code'=>'error','msg'=>'携帯番号が入力されていません']));
		}
        if(empty($params['recruits_job'])){
             die(json_encode(['code'=>'error','msg'=>'職種が入力されていません']));
		}
		if(empty(trim($params['file_name']))){
				die(json_encode(['code'=>'error','msg'=>'履歴書されていません']));
			
		}
		if(empty(trim($params['file_name_work']))){
				die(json_encode(['code'=>'error','msg'=>'職務経歴書されていません']));
			
		}
		if(empty($params['pre_sub'])){
            die(json_encode(['code'=>'error','msg'=>'選んでください同意して内容を確認']));
		}
		if(!empty($params['user_message'])){
            $params['message'] = nl2br($params['user_message']);
		}else{
			$params['message'] = "";
		}
		$params['recruits_name'] = $arr_type[$params['recruits_job']];
		die(json_encode(['code'=>'successful','msg'=>'ok','param'=>$params]));

    }
	public function confirm(){

            $params = $_POST;

            if(empty($params))
                redirect('');
			if(empty(trim($params['full_name']))){
             die(json_encode(['code'=>'error','msg'=>'お名前が入力されていません']));
			}
			if(empty(trim($params['slugname']))){
				die(json_encode(['code'=>'error','msg'=>'フリガナが入力されていません']));
			}
			if(!is_email($params['user_email'])){
				die(json_encode(['code'=>'error','msg'=>'メールアドレスのフォーマットが正しくありません']));
			}
			if(empty($params['user_email'])){
				die(json_encode(['code'=>'error','msg'=>'メールアドレスが入力されていません']));
			}

			if(!is_tel_jp($params['user_phone'])){
				die(json_encode(['code'=>'error','msg'=>'携帯番号のフォーマットが正しくありません']));
			}
			if(empty($params['user_phone'])){
				die(json_encode(['code'=>'error','msg'=>'携帯番号が入力されていません']));
			}
			if(empty($params['user_message'])){
				die(json_encode(['code'=>'error','msg'=>'お問い合わせ内容が入力されていません']));
			}
            $full_name = !empty($params['full_name'])?$params['full_name']:"";
            $slugname = !empty($params['slugname'])?$params['slugname']:"";
            $user_email = !empty($params['user_email'])?$params['user_email']:"";

            $user_phone = !empty($params['user_phone'])?$params['user_phone']:"";


            $user_message = !empty($params['user_message'])?$params['user_message']:"";
            $reply_msg = $full_name." 様。\n\n";

			$reply_msg .= "本日はお問い合わせいただき誠に有難う御座います。\n";
			$reply_msg .= "このメールは受付内容の確認（自動返信）メールとなります。\n";
			$reply_msg .= "下記の質問内容にて受付させていただきました。\n\n";
		
			$reply_msg .= "－お問い合わせ内容－－－－－－－－－－－－－－－－－－－－－－－\n\n";
	
			$reply_msg .= "[ お名前 ]：".$full_name."\n";
			$reply_msg .= "[ フリガナ ]：".$slugname."\n";
			$reply_msg .= "[ メールアドレス ]：".$user_email."\n";

            $reply_msg .= "[ 携帯番号 ]：".$user_phone."\n";
       
			$reply_msg .= "[ メッセージ本文 ]：\n".$user_message."\n\n";
			$reply_msg .= "－－－－－－－－－－－－－－－－－－－－－－－\n\n";
		
            $reply_msg .= "お問い合わせ内容は順次回答させていただいておりますが、\n";
            $reply_msg .= "ご回答には２～３営業日程(土日を除く)お時間をいただく場合もございます。\n\n";

			$reply_msg .= "//////////////////////////////////////////////////////////////////\n\n";
            $reply_msg .= "Scope株式会社 \n";
			$reply_msg .= "〒104-0061\n";
            $reply_msg .= "東京都中央区銀座一丁目22番11号　銀座大竹ビジデンス2階 \n\n";
			$reply_msg .= "電話番号:03-6680-8680\n\n";
			$reply_msg .= "/////////////////////////////////////////////////////////////////\n\n";

		    $this->send_mail($user_email,'お問い合わせ受付完了',$reply_msg);
      
            $receive_msg = $full_name." 様。\n\n";
			$receive_msg .= "－お問い合わせ－－－－－－－－－－－－－－－\n\n";

            $receive_msg .= "[ お名前 ]：".$full_name."\n";
			$receive_msg .= "[ フリガナ ]：".$slugname."\n";
			$receive_msg .= "[ メールアドレス ]：".$user_email."\n";
 

            $receive_msg .= "[ 携帯番号 ]：".$user_phone."\n";
           
			$receive_msg .= "[ メッセージ本文 ]：\n".$user_message."\n\n";
			$receive_msg .= "－－－－－－－－－－－－－－－－－－－－－－－\n";
            $this->send_mail(HOST_RECEIVE_MAIL,'お問い合わせ',$receive_msg);
            //$this->send_mail(HOST_RECEIVE_MAIL_S,'お問い合わせ',$receive_msg);

			die(json_encode(['code'=>'successful','msg'=>'メッセージを送信しました','param'=>$params]));
            
 
	}
	public function recruit_confirm(){
            $params = $_POST;
	
            if(empty($params))
                redirect('');
			if(empty(trim($params['full_name']))){
             die(json_encode(['code'=>'error','msg'=>'お名前が入力されていません']));
			}
			if(empty(trim($params['slugname']))){
				die(json_encode(['code'=>'error','msg'=>'フリガナが入力されていません']));
			}
			if(!is_email($params['user_email'])){
				die(json_encode(['code'=>'error','msg'=>'メールアドレスのフォーマットが正しくありません']));
			}
			if(empty($params['user_email'])){
				die(json_encode(['code'=>'error','msg'=>'メールアドレスが入力されていません']));
			}

			if(!is_tel_jp($params['user_phone'])){
				die(json_encode(['code'=>'error','msg'=>'携帯番号のフォーマットが正しくありません']));
			}
			if(empty($params['user_phone'])){
				die(json_encode(['code'=>'error','msg'=>'携帯番号が入力されていません']));
			}
			if(empty($params['recruits_name'])){
				die(json_encode(['code'=>'error','msg'=>'職種が入力されていません']));
			}
			if(empty(trim($params['file_name']))){
				die(json_encode(['code'=>'error','msg'=>'履歴書されていません']));
			
			}
			if(empty(trim($params['file_name_work']))){
				die(json_encode(['code'=>'error','msg'=>'職務経歴書されていません']));
			
			}
            $full_name = !empty($params['full_name'])?$params['full_name']:"";
            $slugname = !empty($params['slugname'])?$params['slugname']:"";
            $user_email = !empty($params['user_email'])?$params['user_email']:"";

            $user_phone = !empty($params['user_phone'])?$params['user_phone']:"";
            $recruits_name = !empty($params['recruits_name'])?$params['recruits_name']:"";
            $file_name = !empty($params['file_name'])?$params['file_name']:"";
			$file_name_work = !empty($params['file_name_work'])?$params['file_name_work']:"";
            $user_message = !empty($params['user_message'])?$params['user_message']:"";
            $reply_msg = $full_name." 様。\n\n";

			$reply_msg .= "本日はお問い合わせいただき誠に有難う御座います。\n";
			$reply_msg .= "このメールは受付内容の確認（自動返信）メールとなります。\n";
			$reply_msg .= "下記の質問内容にて受付させていただきました。\n\n";
		
			$reply_msg .= "－お問い合わせ内容－－－－－－－－－－－－－－－－－－－－－－－\n\n";
	
			$reply_msg .= "[ お名前 ]：".$full_name."\n";
			$reply_msg .= "[ フリガナ ]：".$slugname."\n";
			$reply_msg .= "[ メールアドレス ]：".$user_email."\n";
    
 
            $reply_msg .= "[ 携帯番号 ]：".$user_phone."\n";
            $reply_msg .= "[ 職種 ]：".$recruits_name."\n";
			$reply_msg .= "[ コメント ]：\n".$user_message."\n\n";
			$reply_msg .= "－－－－－－－－－－－－－－－－－－－－－－－\n\n";
		
            $reply_msg .= "お問い合わせ内容は順次回答させていただいておりますが、\n";
            $reply_msg .= "ご回答には２～３営業日程(土日を除く)お時間をいただく場合もございます。\n\n";

			$reply_msg .= "//////////////////////////////////////////////////////////////////\n\n";
            $reply_msg .= "Scope株式会社 \n";
			$reply_msg .= "〒104-0061\n";
            $reply_msg .= "東京都中央区銀座一丁目22番11号　銀座大竹ビジデンス2階 \n\n";
			$reply_msg .= "電話番号:03-6680-8680\n\n";
			$reply_msg .= "/////////////////////////////////////////////////////////////////\n\n";
		    $this->send_mail($user_email,'応募受付完了',$reply_msg,$file_name,$file_name_work);
            
            $receive_msg = $full_name." 様。\n\n";
			$receive_msg .= "－お問い合わせ－－－－－－－－－－－－－－－\n\n";

            $receive_msg .= "[ お名前 ]：".$full_name."\n";
			$receive_msg .= "[ フリガナ ]：".$slugname."\n";
			$receive_msg .= "[ メールアドレス ]：".$user_email."\n";
 

            $receive_msg .= "[ 携帯番号 ]：".$user_phone."\n";
            $receive_msg .= "[ 職種 ]：".$recruits_name."\n";
			$receive_msg .= "[ コメント ]：\n".$user_message."\n\n";
			$receive_msg .= "－－－－－－－－－－－－－－－－－－－－－－－\n";
			$file_name_receive = $file_name_work;
            $this->send_mail_to(HOST_RECEIVE_MAIL,'応募フォーム',$receive_msg,$file_name,$file_name_receive);
			$file_name_receive_s = $file_name_work;
            //$this->send_mail_th(HOST_RECEIVE_MAIL_S,'応募フォーム',$receive_msg,$file_name,$file_name_receive_s);

			die(json_encode(['code'=>'successful','msg'=>'メッセージを送信しました','param'=>$params]));
            
 
	}
    public function thanks(){
		   $this->load->view('index/index/thanks');
	}
	public function send_mail($to_mail,$title,$msg,$img=null,$work_img=null){

	
		$host_mail = HOST_ADMIN;

		$host_name = HOST_NAME;
        //$host_res_mail = HOST_RECEIVE_MAIL;
//        $config['protocol']    = 'smtp';
//		$config['smtp_host']    = HOST_MAIL;
//		$config['smtp_port']    = '587';
        $this->load->library('email');

		$config['mailtype'] = 'text';
		$this->email->initialize($config);
       
        $this->email->from($host_mail,$host_name);			
        $this->email->to($to_mail);
        $this->email->subject($title);
        $this->email->message($msg);
		if(isset($img)){
            $this->email->attach($img);
			$this->email->attach($work_img);
		}
		 
        $this->email->send();

		$this->email->clear(true);
        //echo $this->email->print_debugger();
		
    }
	public function send_mail_to($to_mail,$title,$msg,$img=null,$work_img=null){

	
		$host_mail = HOST_ADMIN;

		$host_name = HOST_NAME;
        //$host_res_mail = HOST_RECEIVE_MAIL;
//        $config['protocol']    = 'smtp';
//		$config['smtp_host']    = HOST_MAIL;
//		$config['smtp_port']    = '587';
        $this->load->library('email');

		$config['mailtype'] = 'text';
		$this->email->initialize($config);
       
        $this->email->from($host_mail,$host_name);			
        $this->email->to($to_mail);
        $this->email->subject($title);
        $this->email->message($msg);
		if(isset($img)){
            $this->email->attach($img);
			$this->email->attach($work_img);
		}
		 
        $this->email->send();

		$this->email->clear(true);
        //echo $this->email->print_debugger();
		
    }	
	public function send_mail_th($to_mail,$title,$msg,$img=null,$work_img=null){

	
		$host_mail = HOST_ADMIN;

		$host_name = HOST_NAME;
        //$host_res_mail = HOST_RECEIVE_MAIL;
//        $config['protocol']    = 'smtp';
//		$config['smtp_host']    = HOST_MAIL;
//		$config['smtp_port']    = '587';
        $this->load->library('email');

		$config['mailtype'] = 'text';
		$this->email->initialize($config);
       
        $this->email->from($host_mail,$host_name);			
        $this->email->to($to_mail);
        $this->email->subject($title);
        $this->email->message($msg);
		if(isset($img)){
            $this->email->attach($img);
			$this->email->attach($work_img);
		}
		 
        $this->email->send();

		$this->email->clear(true);
        //echo $this->email->print_debugger();
		
    }
	public function admin_send_mail($to_mail,$title,$msg,$img=null,$admin_img=null){

		$host_mail = HOST_MAIL;
		$host_name = HOST_NAME;
        //$host_res_mail = HOST_RECEIVE_MAIL;
        
        $this->load->library('email');
		$config['mailtype'] = 'text';
		$this->email->initialize($config);
       
        $this->email->from($host_mail,$host_name);			
        $this->email->to($to_mail);
        $this->email->subject($title);
        $this->email->message($msg);
		if(isset($img)){
            $this->email->attach($img);
		}
		 
        $this->email->send();
        $this->email->clear();
        //echo $this->email->print_debugger();
		
    }
	public function policy()
	{
		$_arr['title'] = 'プライバシーポリシー';
		$this->load->view('index/index/policy',$_arr);
	}


	public function engineer_unexperienced(){
		$_arr['title'] = 'エンジニア未経験者';
       $this->load->view('index/index/engineer-unexperienced',$_arr);
	}


	public function project_manager(){
		$_arr['title'] = 'プロジェクトマネージャー';
		$this->load->view('index/index/project-manager',$_arr);
	}

	public function application_engineer(){
		$_arr['title'] = 'アプリケーションエンジニア';
       $this->load->view('index/index/application-engineer',$_arr);
	}


	public function network_engineer_design_construction(){
		$_arr['title'] = 'ネットワークエンジニア(設計構築) ';
	   $this->load->view('index/index/network-engineer-design-construction',$_arr);
	}


	public function network_engineer_operation_maintenance(){
		$_arr['title'] = 'ネットワークエンジニア(運用保守) ';
	   $this->load->view('index/index/network-engineer-operation-maintenance',$_arr);
	}
	public function server_engineer_design_construction(){
		$_arr['title'] = 'サーバーエンジニア(設計構築) ';
	   $this->load->view('index/index/server-engineer-design-construction',$_arr);
	}
	public function server_engineer_operational_monitoring(){
		$_arr['title'] = 'サーバーエンジニア(運用監視) ';
	   $this->load->view('index/index/server-engineer-operational-monitoring',$_arr);
	}
	public function cloud_engineer(){
		$_arr['title'] = 'クラウドエンジニア';
	   $this->load->view('index/index/cloud-engineer',$_arr);
	}
	public function game_engineer(){
		$_arr['title'] = 'ゲームエンジニア';
	   $this->load->view('index/index/game-engineer',$_arr);
	}
	public function front_end_engineer(){
		$_arr['title'] = 'フロントエンドエンジニア';
	   $this->load->view('index/index/front-end-engineer',$_arr);
	}
	public function server_side_engineer(){
		$_arr['title'] = 'バックエンドエンジニア';
	   $this->load->view('index/index/server-side-engineer',$_arr);
	}
	public function ui_designer(){
		$_arr['title'] = 'UIデザイナー';
	   $this->load->view('index/index/ui-designer',$_arr);
	}
	public function planner(){
		$_arr['title'] = 'プランナー';
	   $this->load->view('index/index/planner',$_arr);
	}
	public function corporate_sales(){
		$_arr['title'] = '法人営業';
	   $this->load->view('index/index/corporate-sales',$_arr);
	}
	public function ses_sales_agency(){
		$_arr['title'] = 'SES営業代行';
	   $this->load->view('index/index/ses-sales-agency',$_arr);
	}
}