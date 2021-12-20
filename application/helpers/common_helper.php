<?php
defined('BASEPATH') OR exit('No direct script access allowed');



    function callback($msg ="",$code=false,$param=''){
         if($code){
             return json_encode(['status'=>'successful','msg'=>$msg,'param'=>$param]);
         }else{
             return json_encode(['status'=>'fail','msg'=>$msg]);
         }
    } 

    function deep_in_array($value, $array){ 

        foreach($array as $item) {
            if(!is_array($item)) {
                if ($item == $value) {
                    return true;
                } else {
                    continue;
                }
            }

            if(in_array($value, $item)) {
                return true;
            } else if(deep_in_array($value, $item)) {
                return true;
            }
        }
        return false;
    }
    function callback_img($msg ="",$file_name,$code=false){
         if($code){
             return json_encode(['image'=>$msg,'src'=>$file_name]);
         }else{
             return json_encode(['status'=>'fail']);
         }
    } 
    function is_email($email) {
        if(strlen($email) < 6||!preg_match("/^[0-9a-z][0-9a-z-._]+@{1}[0-9a-z.-]+[a-z]{2,4}$/i", $email)){
            return false;
        }
        return true;;
			
	}
    function is_tel_jp($tel=''){


        if (! preg_match('/^(0[5-9]0[0-9]{8}|0[1-9][1-9][0-9]{7})$/',$tel)) {
            return false;
        } else {
            return true;
        }
   }

   function sort_callback($data){
       $num = 0;
       if(!empty($data)){
           $num = count($data);
           $msg = '';
       }else{
           $msg = '展示されていないデータ';
       }
       return json_encode(['code'=>0,'msg'=>$msg,'count'=>$num,'data'=>$data]);
   }
   function getTree($list, $parent_id =0){

        $temp=array();
        $i = 0;
        foreach($list as $k=>$v){
            if($v['parent_id']==$parent_id){
                $temp[$i]['id']=$v['id'];
                $temp[$i]['title']=$v['sort_name'];
                $temp[$i]['parent_id']=$v['parent_id'];
                $temp[$i]['spread']=true;
                $temp[$i]['children']=getTree($list,$v['id']);
                $i++;  
            }
        }
        return $temp;
    }



    function sorting_pictures($img){
        if(is_array($img)){
            
                foreach($img as $k=>$v){
                    $filesize = filesize(__PATH__.'/'.$v);
                    $filesize = round($filesize / 1024 * 100) / 100 ;
                    $file_name = pathinfo($v, PATHINFO_BASENAME);
                    $image[$k]['url'] =  base_url($v);
                    $image[$k]['value'] = ['name'=>$file_name,'size'=>$filesize,'image'=>$v,'id'=>'local_'.mt_rand(0,99999).date('His')];
                }
                $local = json_encode($image);
          
        }else{
                $filesize = filesize(__PATH__.'/'.$img);
                $filesize = round($filesize / 1024 * 100) / 100 ;
                $file_name = pathinfo($img, PATHINFO_BASENAME);
                $image = [
                    [
                    'url' => base_url($img),
                    'value'=>['name'=>$file_name,'size'=>$filesize,'image'=>$img,'id'=>mt_rand(0,99999).date('His')]
                    ]
                ];
                $local = json_encode($image);
        }

        return $local;


    }
    function CheckUrl($C_url){  
        $str="/^http(s?):\/\/(?:[A-za-z0-9-]+\.)+[A-za-z]{2,4}(?:[\/\?#][\/=\?%\-&~`@[\]\':+!\.#\w]*)?$/";  
        if (!preg_match($str,$C_url)){  
            return false;  
        }else{  
           return true;  
        }  
    }  


    function is_English($str){
        $allen = preg_match("/^[^\x80-\xff]+$/", $str);  
        if(!$allen){
            return false;
        }
        return true;
    }
    function multi($num, $perpage, $curpage, $mpurl, $maxpages = 0, $page = 12, $autogoto = FALSE, $simple = FALSE) {
        $ajaxtarget = '';
        $shownum = $showkbd = FALSE;
        $prev_page = '前のページ';
        $next_page = '次のページ';


        $mpurl = empty($mpurl) ? $_SERVER['REQUEST_URI'] : $mpurl;

        $parse_url = parse_url($mpurl);
		
   
        if ($parse_url["path"] && $parse_url["query"]) {
            $url = $url_query = $parse_url["query"];
        } else {
            $url = $url_query = $parse_url["path"];
        }

        if ($url_query) {
      
            $url_query = preg_replace("/((^|&)page=$curpage|page\/$curpage)/i", '', $url_query); 
       
            $mpurl = str_replace($url, $url_query, $mpurl);
        }

        $a_name = '';
        if (strpos($mpurl, '#') !== FALSE) {
            $a_strs = explode('#', $mpurl);
            $mpurl = $a_strs[0];
            $a_name = '#' . $a_strs[1];
        }

        $mpurl .= strpos($mpurl, '?') !== FALSE ? '&amp;' : '?';

        $realpages = 1;
        $page -= strlen($curpage) - 1;
        if ($page <= 0) {
            $page = 1;
        }
        if ($num > $perpage) {

            $offset = floor($page * 0.5);

            $realpages = @ceil($num / $perpage);
            $pages = $maxpages && $maxpages < $realpages ? $maxpages : $realpages;

            if ($page > $pages) {
                $from = 1;
                $to = $pages;
            } else {
                $from = $curpage - $offset;
                $to = $from + $page - 1;
                if ($from < 1) {
                    $to = $curpage + 1 - $from;
                    $from = 1;
                    if ($to - $from < $page) {
                        $to = $page;
                    }
                } elseif ($to > $pages) {
                    $from = $pages - $page + 1;
                    $to = $pages;
                }
            }

            $multipage = '';
            $multipage = ($curpage - $offset > 1 && $pages > $page ? '<a href="' . $mpurl . 'page=1' . $a_name . '" class="first"' . $ajaxtarget . '>最初のページ</a>' : '') .
                    ($curpage > 1 && !$simple ? '<a href="' . $mpurl . 'page=' . ($curpage - 1) . $a_name . '" class="pages-pre"' . $ajaxtarget . '>' . $prev_page . '</a>' : '');
            for ($i = $from; $i <= $to; $i++) {
                $multipage .= $i == $curpage ? '<strong>' . $i . '</strong>' :
                        '<a href="' . $mpurl . 'page=' . $i . ($ajaxtarget && $i == $pages && $autogoto ? '#' : $a_name) . '"' . $ajaxtarget . '>' . $i . '</a>';
            }
            $multipage .= ($curpage < $pages && !$simple ? '<a href="' . $mpurl . 'page=' . ($curpage + 1) . $a_name . '" class="pages-next"' . $ajaxtarget . '>' . $next_page . '</a>' : '') .
                    ($to < $pages ? '<a href="' . $mpurl . 'page=' . $pages . $a_name . '" class="last"' . $ajaxtarget . '>最後のページ</a>' : '') .
                    ($showkbd && !$simple && $pages > $page && !$ajaxtarget ? '<kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location=\'' . $mpurl . 'page=\'+this.value; doane(event);}" /></kbd>' : '');

            $multipage = $multipage ? '<div class="pages fr">' . ($shownum && !$simple ? '<em>&nbsp;' . $num . '&nbsp;</em>' : '') . $multipage . '</div>' : '';
        }
        $maxpage = $realpages;
        return $multipage;
    }
?>