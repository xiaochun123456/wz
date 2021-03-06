<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <title>61微站</title>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/base.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/module.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/login.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/dialog.css"/>
    <script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="pro-regis-header">
                <span class="poster-pro-regis"><img src="/Public/static/images/poster-regis.jpg" alt=""/></span>
                <span class="bg-pro-regis"><img src="/Public/static/images/bg-pro_02.jpg" alt=""/></span>
            </div>
            <div class="change-regis-header">
                <span class="btn-change-regis">更换头像</span>
                <span class="btn-change-regis">更换头像背景</span>
            </div>
        </div>
        <div class="main">
            <form action="/index.php/Home/Member/add" method="POST" name="">

            <div class="mod-create-regis">
                <div class="hd-create-regis">
                    <h2 class="title-create-regis">必填信息</h2>
                    <span class="mask-create-regis"></span>
                </div>
                <div class="bd-create-regis">
                    <ul class="l-create-regis">
                        <li class="li-create-regis">
                            <label class="labl-create-regis">姓&nbsp;&nbsp;名</label>
                            <input class="itxt-create-regis js-name" name="username" type="text" value=""/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis ">公&nbsp;&nbsp;司</label>
                            <input class="itxt-create-regis js-company" name="company" type="text" value=""/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis">职&nbsp;&nbsp;务</label>
                            <input class="itxt-create-regis js-position" name="position" type="text" />
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis js-phone">手&nbsp;&nbsp;机</label>
                            <!--<input class="itxt-create-regis" type="text" value="<?php echo $data[0]['mobile'];?>"/>-->
                            <span class="labl-create-regis"><?php echo $_SESSION['mobile'];?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mod-create-regis">
                <div class="hd-create-regis bg-hbtm">
                    <h2 class="title-create-regis">选填信息</h2>
                    <span class="mask-create-regis"></span>
                </div>
                <div class="bd-create-regis">
                    <ul class="l-create-regis">
                        <li class="li-checkbox-regis">
                            <span class="tip-checkbox-regis">男</span>
                            <div class="mod-checkbox-wz fl">
                                <span class="un-checkbox-wz"></span>
                                <span class="arrow-checkbox-wz"></span>
                                <input type="checkbox" class="none hidden-checkbox" name="gender[]" value="1"/>
                            </div>
                            <span class="tip-checkbox-regis">女</span>
                            <div class="mod-checkbox-wz fl">
                                <span class="un-checkbox-wz"></span>
                                <span class="arrow-checkbox-wz"></span>
                                <input type="checkbox" class="none hidden-checkbox" name="gender[]" value="2"/>
                            </div>
                        </li>

                        
                        <li class="li-create-regis">
                            <label class="labl-create-regis">行&nbsp;&nbsp;业</label>
                            <input class="itxt-create-regis" type="text" name="business"/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis">所在城市</label>
                            <input class="itxt-create-regis" type="text" name="city"/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis">所在地区</label>
                            <input class="itxt-create-regis" type="text" name="area"/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis">公司地址</label>
                            <input class="itxt-create-regis" type="text" name="address"/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis">微信号</label>
                            <input class="itxt-create-regis" type="text" name="weixin"/>
                        </li>
                        <li class="li-create-regis">
                            <label class="labl-create-regis">邮箱</label>
                            <input class="itxt-create-regis" name="email" type="text" />
                        </li>
                        <li class="submit-form-login">
                            <input class="btn-submit-regis mt0" type="submit" value="确&nbsp;&nbsp;定" />
                        </li>
                    </ul>
                </div>
            </div>
            </form>
        </div>
        <div class="footer"></div>
    </div>
    <script type="text/javascript">
        var $dialogC=$('<div class="mask-dialog"></div>'+
                        '<div class="mod-checktip-dialog">'+
                            '<div class="hd-checktip-dialog">'+
                                '<div class="logo-checktip-dilog"><img src="/Public/static/images/logo-dialog_03.png" alt=""/></div>'+
                                '<div class="txtimg-checktip-dialog"><img src="/Public/static/images/txtimg-dialog_07.png" alt=""/></div>'+
                            '</div>'+
                            '<div class="bd-checktip-dialog">'+
                                '<div class="tip-checktip-dialog">为了您更好的使用本产品<br />请输入正确的信息</div>'+
                                '<span class="btn-checktip-dialog">确&nbsp;&nbsp;定</span>'+
                            '</div>'+
                        '</div>');
        //checkbox
        $('.mod-checkbox-wz').click(function(){
            var $bx=$(this).children('.un-checkbox-wz'),
                $ched=$(this).children('.arrow-checkbox-wz'),
                $ckBox=$(this).children('.hidden-checkbox'),
                otherBx=$(this).siblings('.mod-checkbox-wz').find('.un-checkbox-wz'),
                otherChed=$(this).siblings('.mod-checkbox-wz').find('.arrow-checkbox-wz'),
                otherCkBox=$(this).siblings('.mod-checkbox-wz').find('.hidden-checkbox');
            if( $ched.is(':hidden') ){
                otherBx.show();
                otherChed.hide();
                otherCkBox.attr('checked',false);

                $bx.hide();
                $ched.show();
                $ckBox.attr('checked',true);

            }else{
                $bx.show();
                $ched.hide();
                $ckBox.attr('checked',false);
            }
        });

        $('.btn-submit-regis').bind('click',function(e){
            var nameVal=$('.js-name').val(),
                companyVal=$('.js-company').val(),
                positionVal=$('.js-position').val();

            if( nameVal=='' || companyVal=='' || positionVal==''){
                
                e.preventDefault();
                $('body').append($dialogC);
                if( $('.mod-checktip-dialog')[0]!=undefined) {
                    $('.btn-checktip-dialog').click(function(){
                        $('.mask-dialog').remove();
                        $('.mod-checktip-dialog').remove();
                    });
                }
            }
        });
        //animation of change images
        $('.btn-change-regis').click(function(){

        });
    </script>
</body>
</html>