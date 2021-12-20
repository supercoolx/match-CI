<?php
$template = "contact";
?>
<style>
 /* .item{
     text-align: center;
     font-size: 20px;
     padding: 10px;
 } */

 .layui-layer-demo{
     max-width: 860px
 }

 @media (max-width: 500px) {
     .layui-layer-demo {
         height: 100vh!important;
         top: 0!important;
     }
 }

 .layui-layer-demo .form-items {
     width: 100%;
     padding: 0 20px;

 }
  .layui-layer-demo .form .item-control {
      word-break: break-word;
    } 
    
.layui-layer-btn .layui-layer-btn0 svg {
    width: 1em;
    height: 1em;
    font-size: 1.2em;
    margin-left: 0.3em;
    -webkit-transform: translateY(0.2em);
    -ms-transform: translateY(0.2em);
    transform: translateY(0.2em);
}

.layui-layer.layui-layer-dialog.layui-layer-border.layui-layer-msg.layui-layer-hui {
    width: 380px!important;
    max-width: calc(100% - 40px);
}
</style>

<form id="x-form"  >
<main class="form <?php echo $template; ?>">
    <div class="form-content sec_part">
        <div class="contact-form-wrapper">
            <div class="form-items">
           
                <div class="item">
                    <div class="item-name"><span class="require"></span><span class="text">お名前</span>
                    </div>
                    <div class="item-control"><input type="text" placeholder="" autocomplete="off" lay-verify="full_name"  name="full_name" maxlength='15' >
                    </div>
                </div>
                <div class="item">
                    <div class="item-name"><span class="require"></span><span class="text">フリガナ</span>
                    </div>
                    <div class="item-control"><input type="text" placeholder="" autocomplete="off" maxlength='15' lay-verify="slugname" name="slugname"  id="slugname">
                    </div>
                </div>
                <div class="item">
                    <div class="item-name"><span class="require"></span><span class="text">メールアドレス</span>
                    </div>
                    <div class="item-control"><input placeholder="" type="text" autocomplete="off" maxlength='50' lay-verify="user_email" name="user_email" id="user_email">
                    </div>
                </div>


                <div class="item">
                    <div class="item-name"><span class="require"></span><span class="text">携帯番号</span>
                    </div>
                    <div class="item-control"><input type="tel" placeholder="" autocomplete="off" maxlength='11' lay-verify="user_phone" name="user_phone"  id="user_phone">
                    </div>
                </div>

                <div class="item">
                    <div class="item-name"><span class="require"></span><span class="text">お問い合わせ内容</span>
                    </div>
                    <div class="item-control">
                        <textarea rows="8" placeholder="" autocomplete="off" lay-verify="user_message" name="user_message" id="user_message" ></textarea>
                    </div>
                </div>
            </div>
            <div class="form-confirm">
                <div class="more"><a href="javascript:void(0)" id="btt"  class="do-confir">内容を確認<svg
                            t="1628573299469" class="icon" viewBox="0 0 1024 1024" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" p-id="1985" width="200" height="200">
                            <path
                                d="M106.666667 512A405.333333 405.333333 0 1 0 512 106.666667 405.333333 405.333333 0 0 0 106.666667 512z m358.186666-168.533333l170.666667 149.333333a25.450667 25.450667 0 0 1 0 38.4l-170.666667 149.333333a25.557333 25.557333 0 1 1-33.706666-38.4l148.693333-130.133333-148.693333-130.133333a25.557333 25.557333 0 1 1 33.706666-38.4z"
                                fill="#646464" p-id="1986"></path>
                        </svg></a></div>
                <!-- <div class="btn-more">
                    <div class="viewmore">
                        <div class="vbtn do-confirm">
                            <p>内容を確認</p>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</main>
<script >



    $("#btt").click(function(){
        $.ajax({
                type:"post",
                url:"<?php echo base_url('contact')?>",
                dataType:"json",
                data: $('#x-form').serializeArray(),
                success:function(data){
                    if(data.code=='successful'){

                        var html = '';
                        html += '<div class="form">';
                        html += '<div class="form-items">';
                        html += '<div class="item">';
                                html +='<span class="item-name">お名前:</span>'+'<span class="item-control">'+data.param.full_name+'</span>';
                        html += '</div>';        
                        html += '<div class="item">';        
                                html +='<span class="item-name">フリガナ:</span>'+'<span class="item-control">'+data.param.slugname+'</span>';
                        html += '</div>';        
                        html += '<div class="item">';        
                                html +='<span class="item-name">メールアドレス:</span>'+'<span class="item-control">'+data.param.user_email+'</span>';
                        html += '</div>';          
                        html += '<div class="item">';        
                                html +='<span class="item-name">携帯番号:</span>'+'<span class="item-control">'+data.param.user_phone+'</span>';
                        html += '</div>';
                        html += '<div class="item">';        
                                html +='<span class="item-name">お問い合わせ内容:</span>'+'<div class="item-control">'+data.param.message+'</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
            
                        layer.open({
                            title:'ご確認ください',
                            type: 1,
                            skin: 'layui-layer-demo', 
                            closeBtn: 0, 
                            anim: 2,
                            btn: ['送信<svg t="1628573299469" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1985" width="200" height="200"><path d="M106.666667 512A405.333333 405.333333 0 1 0 512 106.666667 405.333333 405.333333 0 0 0 106.666667 512z m358.186666-168.533333l170.666667 149.333333a25.450667 25.450667 0 0 1 0 38.4l-170.666667 149.333333a25.557333 25.557333 0 1 1-33.706666-38.4l148.693333-130.133333-148.693333-130.133333a25.557333 25.557333 0 1 1 33.706666-38.4z" fill="currentColor" p-id="1986"></path></svg>', '修正する'],
                            shadeClose: true, 
                            area: ['100%', '60%'],
                            content: html,
                            yes : function(){
                                $.ajax({
                                        type:"post",
                                        url:"<?php echo base_url('confirm')?>",
                                        dataType:"json",
                                        data: data.param,
                                        success:function(res){
                                            if(res.code=='successful'){
                                        
                                                layer.msg(res.msg, {
                                                    icon: 6,
                                                    time: 2000 
                                                }, function(){
                                                    window.location.href="<?php echo base_url() ?>";
                                                });

                                            }else{
                                                layer.msg(res.msg,function(){
                                         
                                                });
                                            }
                                        }
                                });
                            },


                        });

                    }else{
     
                        layer.msg(data.msg,function(){
                            
                        });
                    }
                }
		});

    });
    

$(window).on('pageshow', function(){
    $("#user_message").val('');
    
    
    $('#file_name_n').attr('data-text','Select your file!')
    $('.file_name_work_n').attr('data-text','Select your file!')
    
    //$("#file_name").val('');    
    //$("input[ name='src_name']").val();    
    //$("#file_name_work").val('');
    //$("input[ name='src_name_work']").val();
    $("#user_message2").val('');
    $("input").prop("checked",false);
});
</script>
</form>
