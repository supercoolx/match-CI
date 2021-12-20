<form id="recruit-form">
    <main class="form recruit">
        <div class="form-content sec_part">
            <div class="contact-form-wrapper">
                <div class="form-items">
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">お名前</span>
                        </div>
                        <div class="item-control"><input type="text" placeholder="" autocomplete="off" name="full_name" maxlength='15'
                                required="required" id="r_full_name">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">フリガナ</span>
                        </div>
                        <div class="item-control"><input type="text" placeholder="" autocomplete="off" maxlength='15' name="slugname"
                                required="required" id="r_slugname">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">メールアドレス</span>
                        </div>
                        <div class="item-control"><input placeholder="" type="email" autocomplete="off" maxlength='50' name="user_email"
                                required="required" id="r_user_email">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">携帯番号</span>
                        </div>
                        <div class="item-control"><input type="tel" maxlength='11' autocomplete="off" name="user_phone" placeholder=""
                                required="required" id="r_user_phone">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">職種</span>
                        </div>
                        <div class="item-control"><select name="recruits_job" id="recruits_job">
                                <option <?php if(isset($type)&&$type=='1') {?> selected="selected" <?php } ?> value="1">エンジニア未経験者</option>
                                <option <?php if(isset($type)&&$type=='2') {?> selected="selected" <?php } ?> value="2">プロジェクトマネージャー</option>
                                <option <?php if(isset($type)&&$type=='3') {?> selected="selected" <?php } ?> value="3">アプリケーションエンジニア</option>
                                <option <?php if(isset($type)&&$type=='4') {?> selected="selected" <?php } ?> value="4">ネットワークエンジニア(設計構築)</option>
                                <option <?php if(isset($type)&&$type=='5') {?> selected="selected" <?php } ?> value="5">ネットワークエンジニア(運用保守) </option>
                                <option <?php if(isset($type)&&$type=='6') {?> selected="selected" <?php } ?> value="6">サーバーエンジニア(設計構築)</option>
                                <option <?php if(isset($type)&&$type=='7') {?> selected="selected" <?php } ?> value="7">サーバーエンジニア(運用監視)</option>
                                <option <?php if(isset($type)&&$type=='8') {?> selected="selected" <?php } ?> value="8">クラウドエンジニア</option>
                                <option <?php if(isset($type)&&$type=='9') {?> selected="selected" <?php } ?> value="9">ゲームエンジニア</option>
                                <option <?php if(isset($type)&&$type=='10') {?> selected="selected" <?php } ?> value="10">フロントエンドエンジニア</option>
                                <option <?php if(isset($type)&&$type=='11') {?> selected="selected" <?php } ?> value="11">バックエンドエンジニア</option>
                                <option <?php if(isset($type)&&$type=='12') {?> selected="selected" <?php } ?> value="12">UIデザイナー</option>
                                <option <?php if(isset($type)&&$type=='13') {?> selected="selected" <?php } ?> value="13">プランナー</option>
                                <option <?php if(isset($type)&&$type=='14') {?> selected="selected" <?php } ?> value="14">法人営業</option>
                                <option <?php if(isset($type)&&$type=='15') {?> selected="selected" <?php } ?> value="15">SES営業代行</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">履歴書</span>
                        </div>
                        <div class="item-control">
                            <div class="file" id="upload_img">
                                <div class="file-upload-wrapper" data-text="Select your file!" id="file_name_n">
                                    <input type="text" name="file_name" id="file_name" multiple="multiple">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span class="require"></span><span class="text">職務経歴書</span>
                        </div>
                        <div class="item-control">
                            <div class="file" id="work_img">
                                <div class="file-upload-wrapper file_name_work_n" data-text="Select your file!" id="file_name_work">
                                    <input type="text" name="file_name_work" id="file_name_work" multiple="multiple">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-name"><span></span><span class="text">コメント</span>
                        </div>
                        <div class="item-control">
                            <textarea rows="8" placeholder="" name="user_message" id="user_message2" required="required"></textarea>
                        </div>
                    </div>
                    <div class="">※<a href="javascript:void(0)" class="showlecture" id="showlecture">「<strong>個人情報の取扱いについて</strong>」</a>をご確認の上、「同意して内容を確認」を押してください。</div>
                    <label for="pre_sub"><input type="checkbox" name="pre_sub" id="pre_sub"
                            required="required">&nbsp;同意して内容を確認</label>


                    
                    </div>
                <div class="form-confirm">
                    <div class="more"><a href="javascript:void(0)" id="recruit_btt" class="do-confir">応募する<svg
                                t="1628573299469" class="icon" viewBox="0 0 1024 1024" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" p-id="1985" width="200" height="200">
                                <path
                                    d="M106.666667 512A405.333333 405.333333 0 1 0 512 106.666667 405.333333 405.333333 0 0 0 106.666667 512z m358.186666-168.533333l170.666667 149.333333a25.450667 25.450667 0 0 1 0 38.4l-170.666667 149.333333a25.557333 25.557333 0 1 1-33.706666-38.4l148.693333-130.133333-148.693333-130.133333a25.557333 25.557333 0 1 1 33.706666-38.4z"
                                    fill="#646464" p-id="1986"></path>
                            </svg></a></div>
                </div>
            </div>
        </div>

        

    </main>
    

    <script>

    $("#recruit_btt").click(function() {

        // var box = $("#pre_sub").is(':checked');
        // if(!box){
        //     layer.msg("選んでください同意して内容を確認",function(){});
        //     return false;
        // }

        $.ajax({
            type: "post",
            url: "<?php echo base_url('recruit_contact') ?>",
            dataType: "json",
            data: $('#recruit-form').serializeArray(),
            success: function(data) {

                if (data.code == 'successful') {

                    var html = '';
                    html += '<div class="form">';
                    html += '<div class="form-items">';
                    html += '<div class="item">';
                    html += '<span class="item-name">お名前:</span>' + '<span class="item-control">' +
                        data.param.full_name + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">フリガナ:</span>' + '<span class="item-control">' +
                        data.param.slugname + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">メールアドレス:</span>' +
                        '<span class="item-control">' + data.param.user_email + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">携帯番号:</span>' + '<span class="item-control">' +
                        data.param.user_phone + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">職種:</span>' + '<span class="item-control">' +
                        data.param.recruits_name + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">履歴書:</span>' +
                        '<span class="item-control">' + data.param.src_name + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">職務経歴書:</span>' +
                        '<span class="item-control">' + data.param.src_name_work + '</span>';
                    html += '</div>';
                    html += '<div class="item">';
                    html += '<span class="item-name">コメント:</span>' + '<div class="item-control">' +
                        data.param.message + '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';

                    layer.open({
                        title: 'ご確認ください',
                        type: 1,
                        skin: 'layui-layer-demo',
                        closeBtn: 0,
                        anim: 2,
                        btn: ['送信<svg t="1628573299469" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1985" width="200" height="200"><path d="M106.666667 512A405.333333 405.333333 0 1 0 512 106.666667 405.333333 405.333333 0 0 0 106.666667 512z m358.186666-168.533333l170.666667 149.333333a25.450667 25.450667 0 0 1 0 38.4l-170.666667 149.333333a25.557333 25.557333 0 1 1-33.706666-38.4l148.693333-130.133333-148.693333-130.133333a25.557333 25.557333 0 1 1 33.706666-38.4z" fill="currentColor" p-id="1986"></path></svg>',
                            '修正する'
                        ],
                        shadeClose: true,
                        area: ['100%', '60%'],
                        content: html,
                        yes: function() {
                            $.ajax({
                                type: "post",
                                url: "<?php echo base_url('recruit_confirm') ?>",
                                dataType: "json",
                                data: data.param,
                                success: function(res) {
                                    if (res.code == 'successful') {

                                        layer.msg(res.msg, {
                                            icon: 6,
                                            time: 2000
                                        }, function() {
                                            window.location.href =
                                                "<?php echo base_url() ?>";
                                        });

                                    } else {
                                        layer.msg(res.msg, function() {

                                        });
                                    }
                                }
                            });
                        },
                    });

                } else {

                    layer.msg(data.msg, function() {

                    });
                }
            }
        });

    });
    </script>
    <script>
    layui.use(['upload'], function() {
        var layer = layui.layer;
        var $ = layui.jquery,
            upload = layui.upload;

        var uploadInst = upload.render({
            elem: '#upload_img',
            url: '<?php echo base_url('upload/image') ?>',
            size: 8192,
            accept: 'file',
            field: "userImg",
            before: function(obj) {

                obj.preview(function(index, file, result) {
                    $('#upload_img').attr('src', result);
                });
            },
            done: function(res) {
                if (!res.image) {
                    return layer.msg('アップロードに失敗しました');
                }
                var file_name_n = document.getElementById('file_name_n');
                file_name_n.setAttribute('data-text', res.src);
                $('#file_name_n').empty();
                $('#file_name_n').html(
                    '<input type="text" name="file_name" id="file_name" value="' + res.image +
                    '" class="layui-input" /><input type="hidden" name="src_name" value="' + res
                    .src + '">');
            },
            error: function() {
                var demoText = $('#demoText');
                demoText.html(
                    '<span style="color: #FF5722;">アップロードに失敗しました</span> <a class="layui-btn layui-btn-xs demo-reload">再試行</a>'
                );
                demoText.find('.demo-reload').on('click', function() {
                    uploadInst.upload();
                });
            }
        });
        var uploadWork = upload.render({
            elem: '#work_img',
            url: '<?php echo base_url('upload/image') ?>',
            size: 8192,
            accept: 'file',
            field: "userImg",
            before: function(obj) {

                obj.preview(function(index, file, result) {
                    $('#work_img').attr('src', result);
                });
            },
            done: function(res) {
                if (!res.image) {
                    return layer.msg('アップロードに失敗しました');
                }
                var file_name_n = document.getElementById('file_name_work');
                file_name_n.setAttribute('data-text', res.src);
                $('#file_name_work').empty();
                $('#file_name_work').html(
                    '<input type="text" name="file_name_work" id="file_name_work" value="' + res.image +
                    '" class="layui-input" /><input type="hidden" name="src_name_work" value="' + res
                    .src + '">');
            },
            error: function() {
                var demoText = $('#demoText');
                demoText.html(
                    '<span style="color: #FF5722;">アップロードに失敗しました</span> <a class="layui-btn layui-btn-xs demo-reload">再試行</a>'
                );
                demoText.find('.demo-reload').on('click', function() {
                    uploadWork.upload();
                });
            }
        });
    })
    </script>

</form>