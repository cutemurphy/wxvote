<?php /* Smarty version Smarty-3.1.13, created on 2014-11-24 23:41:12
         compiled from "templates/indextest.html" */ ?>
<?php /*%%SmartyHeaderCode:771325229546ac623f1c646-01966749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9890e55813d65d1dfefda0f04ed0c58de53cc0f8' => 
    array (
      0 => 'templates/indextest.html',
      1 => 1416843671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '771325229546ac623f1c646-01966749',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_546ac62402dd42_76992669',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ac62402dd42_76992669')) {function content_546ac62402dd42_76992669($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta property="qc:admins" content="637632217767067456375" />
<meta content="target-densitydpi=device-dpi,width=640" name="viewport" class="vp">
<title id="pageTitle"></title>
<style type="text/css">
    *{
        padding: 0;margin: 0;
        -webkit-tap-highlight-color:rgba(0,0,0,0);
    }
    body p,body div{
        background-image: url(about:blank);
    }
    ul,li{
        list-style-type: none;
    }
    a{
        text-decoration: none;
        color: black;
    }
    a[title="站长统计"]{
        display: none;
    }
    body, html {text-align: left;height: 100%;width: 100%;font-family: Roboto,HelveticaNeue,Helvetica,Arial,sans-serif, sans-serif;font-size: 16px;font-weight: normal;display: -webkit-box;-webkit-box-orient: vertical;-webkit-box-align: center;padding: 0px;margin: 0px;}
    body{
        -webkit-transition:all ease-out 500ms;
        opacity: 0;
        width: 640px;
        background-color:#019875;
    }
    .con{
        width: 640px;
        -webkit-box-sizing: border-box;
        padding:0 20px;
    }
    .option{
        position: relative;
        -webkit-transition:background-color ease-out 200ms;
        cursor: pointer;
        font-size:36px;
        padding:10px 15px;
        text-align: center;
        margin-bottom:55px;
        line-height: 60px;
        color:white;
        background-color: #2f7eba;
    }
    .optionIndex{
        position: absolute;
        left: 20px;
        top:10px;
    }
    .item .choosed{
        color:white;
        background-color: #e46a4a;
    }
    .itemTitle{
        font-weight: bold;
        color:gold;
        font-size: 50px;
        font-weight: bold;
        margin-bottom:60px;
    }
    .items{
        padding-top: 20px;
    }
    .items .item{
        -webkit-transition:all ease-out 200ms;
        display: none;
    }
    .items .current{
        display: block;
    }
    .intro{
        display: none;
    }
    .resultCon{
        position: relative;
        -webkit-border-radius:15px;
        padding: 40px;
        padding-top: 130px;
        /*background-color: slateblue;*/
        font-size: 42px;
        color: #ffd700;
        display: none;

    }
    .resultText{
        color: #ffd700;
        margin-top: 20px;
    }
    .datiAgain{
        font-weight: bold;
        cursor: pointer;
        right: 10px;
        top:10px;
        position: absolute;
        z-index: 10;
        height: 80px;
        line-height:80px;
        text-align: center;
        display: inline-block;
        background-color: #4169e1;
        color: white;
        -webkit-border-radius:15px;
        font-size:28px;
        width:190px;
    }
    #share{
        width: 330px;
        height: 228px;
        /*-webkit-transform:scale(1.5);*/
        position: absolute;
        right:0px;
        z-index: 100;
        top:-50px;
        background: url("images/youshangtwo.png") no-repeat;
    }
    .beforeShare{
        height: 400px;
        margin-top:200px;
    }
    .afterShare{
        display: none;
    }
    .authorPhoto,.authorContact{
        margin-top: 15px;
    }
    .author{
        padding-top: 30px;
        color: #ffc0cb;
        font-size: 30px;
    }
    .authorPhoto img{
        width: 250px;
    }
    .itemsList li{
        position:relative;
        overflow: hidden;
        padding: 30px 0 15px 0;
        border-bottom: 1px solid goldenrod;
    }
    .itemsList .left,.itemsList .right{
        float: left;
    }
    .itemsList .left{
        margin-right: 15px;
    }
    .itemsList .startTest{
        position: absolute;
        text-align: center;
        right: 0px;
        top:30px;
        z-index: 10;
        font-size: 24px;
        padding: 10px;
    }
    .itemsList a{

    }
    .itemsList .title{
        color:#ffd700;
        font-size:34px;
        margin-bottom:15px;
        width: 360px;
    }
    .playCount{
        font-size: 26px;
    }
    .startTest{
        background-color: pink;
        -webkit-border-radius:15px;
        font-weight: bold;
    }
    .itemsList li:last-child{
        border-bottom: none;
    }
    .itemsList img{
        width: 100px;
        height: 100px;
    }
    .playMore{
        text-align: center;
        margin-top:70px;
    }
    .playMore a{
        display:inline-block;
        width: 200px;
        height: 200px;
        text-align: center;
        line-height: 200px;
        -webkit-border-radius: 200px;
        background-color: chocolate;
        color: antiquewhite;
    }
    #main{
        padding-bottom: 60px;
    }
    .cooperate{
        padding: 0 20px;
        display: none;
        font-size: 24px;
        margin-bottom: 10px;
    }
    .beforeStepWrap{
        display: none;
    }
    .beforeStepWrap span{
        padding: 15px;
        display: inline-block;
        background-color: wheat;
        text-align: center;
        -webkit-border-radius:20px;
        font-size: 20px;
        color: #808080;
    }
    .topBanner{
        display: -webkit-box;
        height: 80px;
        color: white;
    }
    .topBanner>div{
        width: 10px;
        text-align: center;
        -webkit-box-sizing: border-box;
        padding-top:19px;
        background-color:#000000;
        -webkit-box-flex:1;
    }
    .topBanner>div>p:nth-child(1){
        margin-bottom: 7px;
    }
</style>
</head>
<body>
<p></p>
<div id="main">
    <div class="con">
        <div class="intro">xxx</div>
        <div class="topBanner">
            <div class="yiDa">
                <p class="yiDaNum">0</p>
                <p>已答题目</p>
            </div>
            <div class="tiTotal">
                <p class="tiTotalNum"></p>
                <p>题目总数</p>
            </div>
        </div>
        <div class="items">
            <ul class="itemsList">
                <li><div class="left"><img src="images/ac_self.jpeg" alt=""></div><div class="right"><p class="title">你了解你自己吗？</p><p class="playCount">28000多人玩过</p></div><div class="startTest"><a href="http://www.wxvote.com/?id=25">开始测试</a></div></li>
                <li>
                    <div class="left">
                        <img src="images/ac_usa.jpg" alt="">
                    </div>
                    <div class="right">
                        <p class="title">著名的美国兰德心理测试</p>
                        <p class="playCount">21000多人玩过</p>
                    </div>
                    <div class="startTest">
                        <a href="http://www.wxvote.com/index.php?id=12&type=2">开始测试</a>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <img src="images/ac_aq.jpg" alt="">
                    </div>
                    <div class="right">
                        <p class="title">测测你的逆商指数</p>
                        <p class="playCount">21000多人玩过</p>
                    </div>
                    <div class="startTest">
                        <a href="http://www.wxvote.com/index.php?id=15&type=2">开始测试</a>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <img src="images/ac_cjk.jpg" alt="">
                    </div>
                    <div class="right">
                        <p class="title">男票嘴里的日本女优，你都了解哪些?</p>
                        <p class="playCount">23000多人玩过</p>
                    </div>
                    <div class="startTest">
                        <a href="http://www.wxvote.com/index.php?id=42&type=1">开始测试</a>
                    </div>
                </li>
                <li><div class="left"><img src="images/ac_gay.jpg" alt=""></div><div class="right"><p class="title">同性恋潜质测试？</p><p class="playCount">18000多人玩过</p></div><div class="startTest"><a href="http://www.wxvote.com/?id=11&type=2">开始测试</a></div></li>
                <li><div class="left"><img src="images/ac_friend.JPG" alt=""></div><div class="right"><p class="title">对重要的人而言，你是哪种朋友?</p><p class="playCount">5000多人玩过</p></div><div class="startTest"><a href="http://www.wxvote.com/index.php?id=31">开始测试</a></div></li>
                <li><div class="left"><img src="images/ac_love.jpg" alt=""></div><div class="right"><p class="title">十道题测出你未来爱情真实的样子...</p><p class="playCount">13000多人玩过</p></div><div class="startTest"><a href="http://www.wxvote.com/index.php?id=22">开始测试</a></div></li>
                <li><div class="left"><img src="images/ac_beijing.jpg" alt=""></div><div class="right"><p class="title">北京话水平测试 帝都生存必备...</p><p class="playCount">7000多人玩过</p></div><div class="startTest"><a href="http://www.wxvote.com/index.php?id=23">开始测试</a></div></li>
            </ul>
        </div>
        <div style="text-align: center;" class="beforeStepWrap">
            <span class="beforeStep">回到上一题</span>
        </div>
        <div class="resultCon">
            <div class="beforeShare" style="display: none;">
                分享到朋友圈,查看答案...
                <span id="share"></span>
            </div>
            <div class="afterShare" style="display: block;">
                <span class="datiAgain">重新答题</span>
                <p class="resultTitle"></p>
                <p class="resultText"></p>
                <p class="playMore">
                    <a href="/">挑战更多</a>
                </p>
                <div class="author" style="display: none;">
                    <p class="authorTitle">出题人: 米露</p>
                    <p class="authorContact">联系方式: Alin8712 (微信号)</p>
                    <p class="authorPhoto">
                        <img src="images/milu.jpg" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="cooperate" style="display: none;">
        <p>广告及联系合作,请加微信号: cutemurphy</p>
    </div>
    <div style="padding: 0 20px;overflow: hidden;display: none;">
        <p style="width:392px;margin-right:50px;float:left;margin-bottom: 10px;font-size:28px;color:ivory; ">长按二维码,加入测试微信群,认识和你测试结果一样的朋友</p>
        <img width="150" style="float: left;" src="images/ceshi_group.jpeg" alt="">
    </div>
    <p style="font-size:28px;color:ivory;padding: 20px;display: none;">作者正娶媳妇还房贷，想了解下面广告的，就帮忙点下，功德无量：)：)：)</p>
    <div id="wolf"></div>
</div>
<script type="text/javascript" src="http://img4.cache.netease.com/3g/img13/dati/zepto.min.js"></script>
<script type="text/javascript" src="http://static.adwo.com/jssdk/jssdk.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/wechat.js"></script>
<script type="text/javascript">
(function(){
    var wj={
        page:function(){
            this.init();
            this.events();
            this.wx();
        },
        wxData:{
            "imgUrl":"www.wxvote.com/images/askicon.jpg",
            "link":'',
            "desc":'',
            "title":""
        },
        cookieFun: {
            readCookie: function(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            },
            createCookie: function(name, value, days) {
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "; expires=" + date.toGMTString();
                } else var expires = "";
                document.cookie = name + "=" + value + expires + "; path=/";
            },
            eraseCookie: function(name) {
                this.createCookie(name, "", -1);
            }
        },
        beforeStep:function(){
            if($(".items .current").index()!==0){
                $(".items .current").removeClass("current").prev().addClass("current").removeAttr("data-choose").find(".choosed").removeClass("choosed");
                if($(".items .current").index()==0){
                    $(".beforeStepWrap").hide();
                };
            };
        },
        wx:function(){
            var that=this;
            var randNum=Math.floor(Math.random()*16);
            that.wxData.desc=document.title;
            that.wxData.link=document.URL;
            that.wxData.imgUrl="www.wxvote.com/images/sui"+randNum+".jpg";
            WeixinApi.ready(function(Api){
                var wxCallbacks = {
                    ready:function () {
                    },
                    cancel:function (resp) {
                        alert("亲,为啥要取消分享呢？");
                    },
                    fail:function (resp) {
                        alert("亲,分享失败了,可能是网络问题,一会儿再试试？");
                    },
                    // 分享成功
                    confirm:function (resp) {
                        if(that.cookieFun.readCookie("played")!="1"){
                            //没玩过
                            $(".resultCon>div").hide();
                            $(".afterShare").show();
                            that.cookieFun.createCookie("played","1","4");
                        };
                    },
                    all:function (resp) {

                    }
                };
                // Api.shareToFriend(that.wxData, wxCallbacks);
                Api.shareToTimeline(that.wxData, wxCallbacks);
            });
        },
        initPage:function(data){
            if(data){
                var info=data["info"];
                $(".intro").html(info["intro"]);
            }
        },
        scoreTextArr:[],
        templeteParser: function(tpl, data) {
            tpl = tpl || '';
            return tpl.replace(/{(([A-Z]|[_]|[0-9])+)}/g, function($1, $2) { //大写字母,数字,下划线
                return (data[$2] == null) ? $1 : data[$2];
            });
        },
        tpl:{
            "ask":'<div class="item"></div>',
            'option':'<p class="option" data-value="{VALUE}">{OPTION}</p>',
            'item':'<div class="item" data-answer="{ANSWER}"><div class="itemTitle">{ITEMTITLE}</div><div class="itemOption">{ITEMOPTIONS}</div></div>',
            "itemImage":'<div class="item" data-answer="{ANSWER}"><div class="itemTitle"><div style="width:600px;text-align: center;"><img src="{ITEMTITLE}" alt="" width="600"></div></div><div class="itemOption">{ITEMOPTIONS}</div></div>'
        },
        searchToObject:function() {
            var pairs = window.location.search.substring(1).split("&"),
                    obj = {},
                    pair,
                    i;
            for ( i in pairs ) {
                if ( pairs[i] === "" ) continue;
                pair = pairs[i].split("=");
                obj[ decodeURIComponent( pair[0] ) ] = decodeURIComponent( pair[1] );
            }
            return obj;
        },
        type:1,
        zimu:["","A","B","C","D","E","F","G","H","I","J","k"],
        init:function(){
            document.getElementsByTagName("body")[0].style.opacity=1;
            var that=this,
                    search=window.location.search;
            if(search){
                var queryObj=that.searchToObject();
                if(queryObj.id && queryObj.type==2){
                    that.type=2;
                    //diy
                    $.ajax({
                        "url":"handle/startup.php",
                        "type":"post",
                        "dataType":"json",
                        "data":{
                            "action":"startup",
                            "id":queryObj.id,
                            "type":queryObj.type
                        },
                        "success":function(info){
                            if(info && info["result"]=="200"){
                                var data=info["info"];
                                var acTitle=data["acTitle"];
                                var acIntro=data["acIntro"];
                                var ask=data["ask"];
                                var askArr=ask.split("|");
                                var askLength=askArr.length;
                                $(".tiTotalNum").html(askLength);
                                var optionsText=data["optionsText"].split("{GAP}");
                                var optionsValue=data["optionsValue"].split("{GAP}");
                                // console.log(optionsValue);
                                var scoreTextArr=data["scoreText"].split("|");
                                wj.scoreTextArr=scoreTextArr;
                                $("#pageTitle").html(acTitle);
                                that.wxData.desc=acTitle;
                                $(".intro").html(acIntro);
                                //拼题
                                var itemsArr=[];
                                for(var i=0;i<askArr.length;i++){
                                    var opArr=optionsText[i].split("|"),opvArr=optionsValue[i].split("|"),arr=[];
                                    for(var j=0;j<opArr.length;j++){
                                        arr.push(wj.templeteParser(wj.tpl.option,{
                                            "OPTION":opArr[j],
                                            "VALUE":opvArr[j],
                                            "TIINDEX":that.zimu[j+1]
                                        }));
                                    };
                                    itemsArr.push(wj.templeteParser(wj.tpl.item,{
                                        "ITEMTITLE":askArr[i],
                                        "ITEMOPTIONS":arr.join(""),
                                        "ANSWER":""
                                    }));
                                };
                                $(".items").html(itemsArr.join(""));
                                $(".items .item").eq(0).addClass("current");
                            };
                        }
                    });
                }else{
                    //single
                    that.type=1;
                    $.ajax({
                        "url":"handle/startup.php",
                        "type":"post",
                        "dataType":"json",
                        "data":{
                            "action":"startup",
                            "id":queryObj.id,
                            "type":queryObj.type
                        },
                        "success":function(data){
                            if(data && data["result"]=="200"){
                                var data=data["info"];
                                var acTitle=data["acTitle"];
                                $("#pageTitle").html(acTitle);
                                that.wxData.desc=acTitle;
                                var acIntro=data["acIntro"];
                                $(".intro").html(acIntro);
                                var ask=data["ask"];
                                var askArr=ask.split("{ask}");
                                var askLength=askArr.length-1;
                                $(".tiTotalNum").html(askLength);
                                var answer=data["answer"];
                                var scoreTextArr=data["scoreText"].split("|");
                                wj.scoreTextArr=scoreTextArr;
                                var itemArr=[],answerArr=answer.split("|");
                                //从1开始
                                for(var i=1;i<askArr.length;i++){
                                    var askArrSub=askArr[i].split("|"),optionsArr=[];

                                    var itemTitle=askArrSub[0],itemOptionStr="";
                                    //拼选项　
                                    for(var j=1;j<askArrSub.length;j++){
                                        optionsArr.push(wj.templeteParser(wj.tpl.option,{
                                            "VALUE":"",
                                            "OPTION":askArrSub[j]
                                        }));
                                    };
                                    if(/jpg|png|jpeg/.test(itemTitle)){
                                        //带图
                                        itemArr.push(wj.templeteParser(wj.tpl.itemImage,{
                                            "ITEMTITLE":itemTitle,
                                            "ITEMOPTIONS":optionsArr.join(""),
                                            "ANSWER":answerArr[i-1]
                                        }));
                                    }else{
                                        //拼整道题
                                        itemArr.push(wj.templeteParser(wj.tpl.item,{
                                            "ITEMTITLE":itemTitle,
                                            "ITEMOPTIONS":optionsArr.join(""),
                                            "ANSWER":answerArr[i-1]
                                        }));
                                    }
                                };
                                $(".items").html(itemArr.join(""));
                                $(".items .item").eq(0).addClass("current");
                            };
                        }
                    });
                };
            }else{
                //$(".cooperate").show();
            }
        },
        events:function(){
            var that=this;
            $(".beforeStep").on("click",function(){
                that.beforeStep();
            });
            $(".datiAgain").on("click",function(){
                location.reload();
            });
            $(".items").on("click",".items .option",function(){
                var total=$(".items").find(".item").length,that=this;
                if($(that).closest(".item").index()==0){
                    $(".beforeStepWrap").show();
                };
                $(".yiDaNum").html(parseInt($(".yiDaNum").html())+1);
                //两个that
                if($(this).hasClass("choosed")) return;
                $(this).parent().parent().attr("data-choose",$(this).index()+1);
                $(this).siblings().removeClass("choosed");
                $(this).addClass("choosed");
                setTimeout(function(){
                    if($(that).parent().parent().index()!=--total){
                        $(".items>div").removeClass("current");
                        $(that).parent().parent().next().addClass("current");
                    }else{
                        //结束
                        if(wj.cookieFun.readCookie("played")=="1"){
                            //played
                            $(".resultCon>div").hide();
                            $(".afterShare").show();
                        }else{
                            $(".resultCon>div").hide();
                            $(".beforeShare").show();
                        };
                        var rightNum=0;
                        if(wj.type==1){
                            //single
                            $(".items .item").each(function(){
                                var choose=$(this).attr("data-choose");
                                var answer=$(this).attr("data-answer");
                                if(choose==answer){
                                    rightNum++;
                                };
                            });
                            $(".con>div").hide();
                            $(".resultCon").show();
                            var totalScore=rightNum*10;
                            var scoreObject={};
                            for(var j=0;j<wj.scoreTextArr.length;j++){

                                var x=wj.scoreTextArr[j].split("{gap}")[0];
                                var y=wj.scoreTextArr[j].split("{gap}")[1];
                                scoreObject[x]=y;
                            };
                            for(var k in scoreObject){
                                if(totalScore>=k.split("～")[0] && totalScore<=k.split("～")[1]){
                                    $(".resultText").html(scoreObject[k]);
                                };
                            };
                            $(".resultTitle").html("您的得分是:"+totalScore+"分");
                        }else if(wj.type==2){
                            //diy
                            var score=0;
                            $(".items .item").each(function(){
                                score+=parseInt($(this).find(".choosed").attr("data-value"));
                            });
                            $(".con>div").hide();
                            $(".resultCon").show();
                            var scoreObject={};
                            for(var j=0;j<wj.scoreTextArr.length;j++){
                                var x=wj.scoreTextArr[j].split("{GAP}")[0];
                                var y=wj.scoreTextArr[j].split("{GAP}")[1];
                                scoreObject[x]=y;
                            };
                            for(var k in scoreObject){
                                if(score>=k.split("～")[0] && score<=k.split("～")[1]){
                                    $(".resultText").html(scoreObject[k]);
                                };
                            };
                            $(".resultTitle").html("您的得分是:"+score+"分");
                        }

                    }
                },500);
            });
        }
    };
    wj.page();
}());
</script>
<script src="http://s23.cnzz.com/z_stat.php?id=1253501757&web_id=1253501757" language="JavaScript"></script>
<script type="text/javascript">
    window.onload=function(){
        var ad=new adwojs({
            eid:'wolf', //节点id
            aid: '70011b95220b4257b6d7797f6a666428', //申请的android平台pid
            pid: '679e4b5ad1a54c87b65939e494684d42', //申请的iphone平台pid
            bt:false, //是否开启测试广告，用于客户在申请PID过程中的广告测试,默认值为false
            af:true, //是否自动适合ipad平板广告，默认值为true。
            width:320, //广告图片宽度(除320外，还有720宽度，用于ipad中显示)
            height:50 //广告图片高度(除50外，还有110高度，用于ipad中显示)
        });
        ad.send();
    };

</script>
</body>
</html><?php }} ?>