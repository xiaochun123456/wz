<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <title>61微站-修改密码</title>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/base.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/module.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/list.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/bidding.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/static/css/create.css"/>
    <script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
</head>
<body>
<div class="container">
    <ul class="l-create-wz">
        <form action="/index.php/Home/Member/editpsw?id=<?php echo $_SESSION['user_id'];?>" method="post">
        <li class="li-create-wz">
            <label class="label-create-wz">旧密码</label>
            <input class="itxt-psw-wz" name="oldpwd" type="text" value="" />
        </li>
        <li class="li-create-wz">
            <label class="label-create-wz">新密码</label>
            <input class="itxt-psw-wz" name="password" type="text" value="" />
        </li>
        <li class="li-create-wz">
            <label class="label-create-wz">确认新密码</label>
            <input class="itxt-psw-wz" name="repassword" type="text" value="" />
        </li>
        <input type="submit" value="提交">
        </form>
    </ul>
</div>
<div class="mask-collect-wz none"></div>
<div class="box-collect-wz none">
    <div class="close-collect-wz">
        <span class="fork-collect-wz"><img src="/Public/static/images/fork-collect_03.png" alt=""/></span>
    </div>
    <div class="logo-collect-wz"><img src="/Public/static/images/logo-collect_03.png" alt=""/></div>
    <div class="intro-collect-wz">
        <p class="text-intro-collect">step1、点击右上角</p>
        <p class="text-intro-collect">step2、选择下拉菜单中的<span class="dotted-intro-collect"><img src="/Public/static/images/dotted-collect_07.png" alt=""/></span></p>
        <ul class="l-intro-collect">
            <li class="li-intro-collect">
                <span class="icon-li-cintro"><img src="/Public/static/images/icon-collect-share_11.png" alt=""/></span>
                <span class="text-li-cintro">分享给朋友</span>
            </li>
            <li class="li-intro-collect">
                <span class="icon-li-cintro"><img src="/Public/static/images/icon-collect-share_13.png" alt=""/></span>
                <span class="text-li-cintro">发送到朋友圈</span>
            </li>
            <li class="li-intro-collect">
                <span class="icon-li-cintro"><img src="/Public/static/images/icon-collect-share_16.png" alt=""/></span>
                <span class="text-li-cintro">收藏</span>
            </li>
        </ul>
        <p class="text-intro-collect">即可分享给好友或好友圈</p>
    </div>
    <div class="share-collect-wz">
        <h4 class="title-share-collect">分享到：</h4>
        <ul class="l-share-collect">
            <li class="li-share-collect">
                <span class="icon-li-share"><img src="/Public/static/images/icon-share-collect_03.png" alt=""/></span>
                <span class="text-li-share">qq好友</span>
            </li>
            <li class="li-share-collect">
                <span class="icon-li-share"><img src="/Public/static/images/icon-share-collect_05.png" alt=""/></span>
                <span class="text-li-share">qq空间</span>
            </li>
            <li class="li-share-collect br_none">
                <span class="icon-li-share"><img src="/Public/static/images/icon-share-collect_07.png" alt=""/></span>
                <span class="text-li-share">腾讯微博</span>
            </li>
            <li class="li-share-collect">
                <span class="icon-li-share"><img src="/Public/static/images/icon-share-collect_12.png" alt=""/></span>
                <span class="text-li-share">新浪微博</span>
            </li>
            <li class="li-share-collect">
                <span class="icon-li-share"><img src="/Public/static/images/icon-share-collect_13.png" alt=""/></span>
                <span class="text-li-share">人人网</span>
            </li>
            <li class="li-share-collect br_none">
                <span class="icon-li-share"><img src="/Public/static/images/icon-share-collect_15.png" alt=""/></span>
                <span class="text-li-share">更多</span>
            </li>
        </ul>
    </div>
</div>
<div class="mask-tools-wz none"></div>
<div class="box-tools-wz">
        <ul class="l-set-tools none">
            <li class="li-set-tools more">
                <span class="text-li-tools js-text-fork">更多</span>
                <span class="fork-li-tools fr"><img src="/Public/static/images/fork-tools_03.png" alt=""/></span>
            </li>
            <li class="li-set-tools edit">
                <!--<a href="/weizhan/edit-card.html">-->
                    <a href="/index.php/Home/Member/edit?id=<?php echo $_SESSION['user_id'];?>"> 
                    <span class="icon-li-tools"><img src="/Public/static/images/icon-tools_03.png" alt=""/></span>
                    <span class="text-li-tools">修改微名片</span>
                </a>
            </li>
            <li class="li-set-tools feedback" >
                <a href="/weizhan/feedback.html">
                    <a href="/index.php/Feedback/Feedback/add"> <span class="icon-li-tools"><img src="/Public/static/images/icon-tools_06.png" alt=""/></span>
                        <span class="text-li-tools">意见反馈</span></a>
                </a>
            </li>
            <li class="li-set-tools about" style="display: none">
                <a href="/weizhan/about.html">
                    <span class="icon-li-tools"><img src="/Public/static/images/icon-tools_08.png" alt=""/></span>
                    <span class="text-li-tools">关于微站</span>
                </a>
            </li>
            <li class="li-menu-tools" style="display: block">
                <div class="menu-set-tools">
                    <div class="item-set-tools product">
                        <a href="/index.php/Product/Product/producteditlist">
                            <span class="icon-set-tools"><img src="/Public/static/images/icon-set_11.png" alt=""/></span>
                            <span class="text-set-tools">我的产品</span>
                        </a>
                    </div>
                    <div class="item-set-tools intro">
                        <a href="/index.php/Company/Company/reedit?uid=<?php echo $info['id'];?>">
                            <span class="icon-set-tools"><img src="/Public/static/images/icon-set_13.png" alt=""/></span>
                            <span class="text-set-tools">公司简介</span>
                        </a>
                    </div>
                    <div class="item-set-tools album">
                        <a href="javascript:void(0);">
                            <span class="icon-set-tools"><img src="/Public/static/images/icon-set_17.png" alt=""/></span>
                            <span class="text-set-tools">我的相册</span>
                        </a>
                    </div>
                    <div class="item-set-tools jobing">
                        <a href="javascript:void(0);">
                            <span class="icon-set-tools"><img src="/Public/static/images/icon-set_18.png" alt=""/></span>
                            <span class="text-set-tools">我在招</span>
                        </a>
                    </div>
                    <div class="item-set-tools news">
                        <a href="/index.php/News/Information/inforeditlist">
                            <span class="icon-set-tools"><img src="/Public/static/images/icon-set_21.png" alt=""/></span>
                            <span class="text-set-tools">最新资讯</span>
                        </a>
                    </div>
                    <div class="item-set-tools active">
                        <a href="javascript:void(0);">
                            <span class="icon-set-tools"><img src="/Public/static/images/icon-set_22.png" alt=""/></span>
                            <span class="text-set-tools">活动中心</span>
                        </a>
                    </div>
                </div>
            </li>
            <li class="li-set-tools logout" >
                <span class="icon-li-tools"><img src="/Public/static/images/icon-tools_25.png" alt=""/></span>               
                <a href="/index.php/Home/Login/logout"><span class="text-li-tools">退出账户</span></a>
            </li>
        </ul>
        <div class="clear"></div>
        <ul class="l-tools-wz">
            <li class="li-tools-wz collect">
                <span class="icon-collect-tools"><img src="/Public/static/images/icon-tools_09.jpg" alt=""/></span>
                <span class="text-collect-tools">分享求收藏</span>
            </li>
            <li class="li-tools-wz index f_none">
                <a class="link-tools-wz" href="/">
                    <span class="icon-collect-tools"><img src="/Public/static/images/icon-tools_11.jpg" alt=""/></span>
                    <span class="text-collect-tools">首页</span>
                </a>
            </li>
            <li class="li-tools-wz more">
                 <span class="icon-collect-tools"><img src="/Public/static/images/icon-tools_13.jpg" alt=""/></span>
                    <span class="text-collect-tools">更多</span>
            </li>
        </ul>
    </div>
<script type="text/javascript" src="/Public/static/js/menu.js"></script>
</body>
</html>