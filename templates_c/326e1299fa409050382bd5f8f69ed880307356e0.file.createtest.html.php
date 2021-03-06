<?php /* Smarty version Smarty-3.1.13, created on 2014-11-19 13:58:02
         compiled from "templates/createtest.html" */ ?>
<?php /*%%SmartyHeaderCode:2115535628546be89574a573-51163188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '326e1299fa409050382bd5f8f69ed880307356e0' => 
    array (
      0 => 'templates/createtest.html',
      1 => 1416376649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115535628546be89574a573-51163188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_546be895790ef9_81210903',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546be895790ef9_81210903')) {function content_546be895790ef9_81210903($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="target-densitydpi=device-dpi,width=640" name="viewport" class="vp">
    <title>创建页</title>
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color:#2c3e50;
            color: #2fe2bf;
        }
        #main{
            width:800px;
            margin: 0 auto;
            font-size: 24px;
            padding: 30px 0 100px 0;
        }
        .title,.intro,.acTitle{
            margin-bottom: 15px;
        }
        .intro{
            margin-top: 15px;
        }
        textarea{
            border: none;
            outline: none;
            -webkit-border-radius:15px;
        }
        .item{
            -webkit-border-radius:15px;
            border: 3px solid #ec7063;
            margin-bottom: 10px;
            padding: 20px 10px;
            overflow: hidden;
        }
        .item>p{
            margin-bottom: 20px;
        }
        input[type="text"]{
            padding-left: 5px;
            height: 40px;
            margin-left: 10px;
            width: 250px;
            font-size: 22px;
        }
        .resultTextWrap{
            display: none;
            margin-top: 15px;
            -webkit-border-radius:15px;
            padding: 30px;
            border: 3px solid sienna;
        }
        .resultTextWrap textarea{
            width: 500px;
            height: 150px;
            font-size: 20px;
            padding: 20px;
        }
        .saveScoreText{
            display: none;
            height: 40px;
            line-height:40px;
            width: 120px;
            text-align: center;
            background-color: #4169e1;
            color: white;
            -webkit-border-radius: 5px;
            font-size:18px;
            margin-top: 15px;
        }
        .addOption,.saveTi,.addTi,.resultNumNext{
            height: 40px;
            line-height:40px;
            width: 120px;
            text-align: center;
            display: inline-block;
            background-color: #4169e1;
            color: white;
            -webkit-border-radius: 5px;
            font-size:18px;
        }
        .resultNumNext{
            margin-top: 15px;
        }

        .saveTi{
            background-color: red;
        }
        #acIntro{
            margin-top: 15px;
            width: 360px;
            height: 110px;
            font-size: 18px;
            padding: 20px;
        }
        #acTitle{
            margin-top: 15px;
            width: 360px;
            height:30px;
            font-size: 18px;
            padding: 20px;
        }
        .result{
            display: none;
            margin-top: 15px;
        }
        .resultText{
            margin-bottom: 15px;
        }
        .success{
            display: none;
        }
        .resultText p{
            margin-bottom: 10px;
        }
        #voteType{
            font-size: 20px;
            margin-bottom: 20px;
        }
        .actions{
            display: none;
        }
        .itemsType>div{
            overflow: hidden;
            margin-bottom: 25px;
            display: none;
        }
        .tiUrl{
            color: red;
        }
    </style>
</head>
<body>
<div id="main">
    <div class="ti">
        <div class="title">
            <p>输入活动标题:</p>
            <textarea name="acTitle" id="acTitle"></textarea>
        </div>
        <div class="intro">
            <p>输入活动简介:</p>
            <textarea name="acIntro" id="acIntro"></textarea>
        </div>
        <select name="voteType" id="voteType">
            <option value="choose">请选择投票类型:</option>
            <option value="single">单选</option>
            <option value="diy">自定义分值</option>
            <!--<option value="multi">多选</option>-->
        </select>
        <div class="itemsType">
            <div class="multiItems">多选</div>
            <div class="diyItems">
                <div class="item">
                    <p><span>第1题:</span><input type="text" name="item1" placeholder="输入题目内容" class="ask"></p>
                    <p><span>选项A:</span><input type="text" name="item1option1" placeholder="填入选项内容" class="option"><input type="text" name="item1option1value" placeholder="分值" class="score"></p>
                    <span class="addOption">添加新选项</span>
                </div>
            </div>
            <div class="singleItems">
                <div class="item">
                    <p><span>第1题:</span><input type="text" name="item1" placeholder="输入题目内容"></p>
                    <p><input type="checkbox" name="item1option1"><label for="item1option1">选项A:</label><input type="text" name="item1option1" id="item1option1" placeholder="填入选项内容"></p>
                    <span class="addOption">添加新选项</span>
                </div>
            </div>
        </div>
        <div class="actions">
            <span class="addTi">添加下一题</span>
            <span class="saveTi">生成所有题目</span>
        </div>
    </div>
    <div class="result">
        <p style="text-indent: 10px;font-size: 22px;margin-bottom: 15px;">您一共出了<span class="tiNums"></span>道题，总分为<span class="tiScores"></span>分,现在要设定得分文案。</span>请在0和<span class="gap"></span>之间输入一个数字,若总分值为80,如果输入'20,50'则会分成0~20/20~50/50~80三个分数段。</p>
        <div class="resultCon">
            <input type="text" name="resultnum" id="resultnum" placeholder="多个数值,请用逗号隔开">
        </div>
        <span class="resultNumNext">下一步</span>
        <div class="resultTextWrap"></div>
        <div class="saveScoreText">保存所有文案</div>
    </div>
    <div class="success">
        题目地址为:<a class="tiUrl" target="_blank"></a>
        <p>也可以扫描二维码，分享至微信:</p>
        <img src="#" alt="#">
    </div>
</div>
<script type="text/javascript" src="js/zepto.min.js"></script>
<script type="text/javascript">
;(function(){
    var wj={
        init:function(){
            this.events();
        },
        templeteParser: function(tpl, data) {
            tpl = tpl || '';
            return tpl.replace(/{(([A-Z]|[_]|[0-9])+)}/g, function($1, $2) { //大写字母,数字,下划线
                return (data[$2] == null) ? $1 : data[$2];
            });
        },
        tpl:{
            "option":'<p><input type="checkbox" name="{FUHAO}"><label for="{FUHAO}">选项{ZIMU}:</label><input type="text" name="{FUHAO}" id="{FUHAO}" placeholder="填入选项内容" class="option"></p>',
            "optionDiy":'<p><span>选项{ZIMU}:</span><input type="text" name="{FUHAO}" placeholder="填入选项内容" class="option"><input type="text" name="{FUHAO}value" placeholder="分值" class="score"></p>',
            "ti":'<div class="item"><p><label for="item{TIINDEX}">第{TIINDEX}题:</label><input type="text" name="item{TIINDEX}" id="item{TIINDEX}" placeholder="输入题目内容"></p><p><input type="checkbox" name="item{TIINDEX}option1"><label for="item{TIINDEX}option1">选项A:</label><input type="text" name="item{TIINDEX}option1" id="item{TIINDEX}option1" placeholder="填入选项内容"></p><input type="button" value="添加新选项" class="addOption"></div>',
            "result":'<div class="resultText"><p><span class="scoreRange">{SMALL}～{BIG}</span>分的分享文案为:</p><textarea></textarea></div>',
            "tiDiy":['<div class="item">',
                '<p><span>第{TIINDEX}题:</span><input type="text" name="item{TIINDEX}" placeholder="输入题目内容" class="ask"></p>',
                '<p><span>选项A:</span><input type="text" name="item{TIINDEX}option1" placeholder="填入选项内容" class="option"><input type="text" name="item{TIINDEX}option1value" placeholder="分值" class="score"></p>',
                '<span class="addOption">添加新选项</span></div>'].join("")
        },
        totalScore:0,
        askStr:"",
        "acTitle":"",
        answerStr:"",
        voteType:"",
        "acIntro":"",
        zimu:["","A","B","C","D","E","F","G","H","I","J","k"],
        events:function(){
            $("#voteType").on("change",function(){
                if($(this).val()=="single"){
                    wj.voteType="single";
                    $(".itemsType>div").hide();
                    $(".singleItems").show();
                    $(".actions").show();
                    $(this).hide();
                }else if($(this).val()=="multi"){
                    wj.voteType="multi";
                }else if($(this).val()=="diy"){
                    wj.voteType="diy";
                    $(".itemsType>div").hide();
                    $(".diyItems").show();
                    $(".actions").show();
                    $(this).hide();
                }
            });
            $("#main").on("click",".addOption",function(){
                if(wj.voteType=="single"){
                    var zimu=wj.zimu[$(this).parent().find("p").length];
                    var optionIndex=$(this).parent().find("p").length;
                    var tiIndex=$(this).parent().index();
                    var fuhao="item"+(tiIndex+1)+"option"+optionIndex;
                    var str=wj.templeteParser(wj.tpl.option,{
                        "ZIMU":zimu,
                        "FUHAO":fuhao
                    });
                    $(this).before(str);
                }else if(wj.voteType=="diy"){
                    // console.log(2);
                    var zimu=wj.zimu[$(this).parent().find("p").length];
                    var optionIndex=$(this).parent().find("p").length;
                    var tiIndex=$(this).parent().index();
                    var fuhao="item"+(tiIndex+1)+"option"+optionIndex;
                   // console.log(fuhao);
                    var str=wj.templeteParser(wj.tpl.optionDiy,{
                        "ZIMU":zimu,
                        "FUHAO":fuhao
                    });
                    $(this).before(str);
                };

            });
            $("#main").on("click",".addTi",function(){
                if(wj.voteType=="single"){
                    var tiindex=$(".singleItems").find(".item").length+1;
                    var str=wj.templeteParser(wj.tpl.ti,{
                        "TIINDEX":tiindex
                    });
                    $(".singleItems").append(str);
                }else if(wj.voteType=="diy"){
                    var tiindex=$(".diyItems").find(".item").length+1;
                    var str=wj.templeteParser(wj.tpl.tiDiy,{
                        "TIINDEX":tiindex
                    });
                    $(".diyItems").append(str);
                }

            });
            $(".saveTi").on("click",function(){
                if($("#acTitle").val()==""){
                    alert("活动标题不能为空!");
                    return;
                };
                if($("#acIntro").val()==""){
                    alert("活动简介不能为空!");
                    return;
                };
                //自定义题目
                if(wj.voteType=="diy"){
                    var check=true,xunhuan=true;
                    $(".diyItems .item").each(function(i,v){
                        $(this).find("input[type=text]").each(function(i,v){
                            if($(this).val()==""){
                                if(/value/.test($(this).attr("name"))){
                                    alert("选项内容不能为空!");
                                }else{
                                    alert("题目分值得不能为空!");
                                }
                                check=false;
                                xunhuan=false;
                                return false;
                            }
                        });
                        if(!xunhuan){
                            return xunhuan;
                        }
                    });
                    if(!check){
                        return false;
                    };
                    var num=$(".diyItems .item").length;
                    var askArr=[],valueStr="",valueArr=[],totalScore= 0,optionsValueArr=[],optionsTextArr=[];
                    $(".diyItems .item").each(function(){
                        var optionsArrSub=[],optionsValueArrSub=[];
                        //ask
                        $(this).find(".ask").each(function(i,v){
                            askArr.push($(v).val());
                        });
                        //options
                        $(this).find(".option").each(function(i,v){
                            optionsArrSub.push($(v).val());
                        });
                        optionsTextArr.push(optionsArrSub.join("|"));
                        //optionsValue
                        $(this).find(".score").each(function(i,v){
                            optionsValueArrSub.push($(v).val());
                        });
                        optionsValueArr.push(optionsValueArrSub.join("|"));
                    });
                    //选项内容
                    wj.optionsText=optionsTextArr.join("{GAP}");
                    //分值
                    wj.optionsValue=optionsValueArr.join("{GAP}");
                    //问题
                    wj.askStr=askArr.join("|");
                    wj.acTitle=$("#acTitle").val();
                    wj.acIntro=$("#acIntro").val();
                    $(".tiNums").html($(".singleItems .item").length);
                    $(".diyItems").find(".score").each(function(i,v){
                        totalScore+=parseInt($(v).val());
                    });
                    $(".tiScores,.gap").html(totalScore);
                    wj.totalScore=totalScore;
                    $(".ti").hide();
                    $(".result").show();
                }else if(wj.voteType=="single"){
                    var check=true,xunhuan=true;
                    $(".singleItems .item").each(function(i,v){
                        $(this).find("input[type=text]").each(function(i,v){
                            if($(this).val()==""){
                                if(/option/.test($(this).attr("name"))){
                                    alert("选项内容不能为空!");
                                }else{
                                    alert("题目标题不能为空!");
                                }
                                check=false;
                                xunhuan=false;
                                return false;
                            }
                        });
                        if(!xunhuan){
                            return xunhuan;
                        }
                    });
                    if(!check){
                        return false;
                    };
                    var checkBoxChecked,checkBoxBreak=true;
                    $(".singleItems .item").each(function(){
                        if($(this).find("input[type=checkbox]:checked").length<1){
                            alert("每题至少有一个checkbox被选择!");
                            checkBoxChecked=false;
                            checkBoxBreak=false;
                            return false;
                        }else{
                            checkBoxChecked=true;
                            checkBoxBreak=true;
                        };
                        if(!checkBoxBreak){
                            return checkBoxBreak;
                        };
                    });
                    if(!checkBoxChecked){
                        return checkBoxChecked;
                    };
                    var num=$(".singleItems .item").length;
                    var askStr="",askArr=[],answerStr="",answerArr=[];
                    $(".singleItems .item").each(function(){
                        var arr1=[],str1="",arr2=[],str2="";
                        $(this).find("p").each(function(i,v){
                            arr1.push($(this).find("input[type=text]").val());
                        });
                        str1="{ask}"+arr1.join("|");
                        askArr.push(str1);
                        //answer
                        var cc=$(this).find(":checked").parent().index();
                        answerArr.push(cc);
                    });
                    wj.answerStr=answerStr=answerArr.join("|");
                    wj.askStr=askStr=askArr.join("");
                    wj.acTitle=$("#acTitle").val();
                    wj.acIntro=$("#acIntro").val();
                    $(".tiNums").html($(".singleItems .item").length);
                    $(".tiScores,.gap").html($(".singleItems .item").length*10);
                    wj.totalScore=$(".singleItems .item").length*10;
                    $(".ti").hide();
                    $(".result").show();
                };
            });
            $(".resultNumNext").on("click",function(){
                if(wj.voteType=="single"){
                    var arr=$("#resultnum").val().split(","),resultArr=[],scoreArr=[0];
                    for(var j=0;j<arr.length;j++){
                        scoreArr.push(arr[j]);
                    };
                    scoreArr.push(wj.totalScore);
                    for(var i=0;i<scoreArr.length-1;i++){
                        resultArr.push(wj.templeteParser(wj.tpl.result,{
                            "SMALL":scoreArr[i],
                            "BIG":scoreArr[i+1]
                        }));
                    };
                    $(".resultTextWrap").html(resultArr.join(""));
                    $(this).hide();
                    $(".resultTextWrap").show();
                    $(".saveScoreText").show();
                }else if(wj.voteType=="diy"){
                    // alert(11);
                    var arr=$("#resultnum").val().split(","),resultArr=[],scoreArr=[0];
                    for(var j=0;j<arr.length;j++){
                        scoreArr.push(arr[j]);
                    };
                    scoreArr.push(wj.totalScore);
                  //  console.log(scoreArr);
                    for(var i=0;i<scoreArr.length-1;i++){
                        resultArr.push(wj.templeteParser(wj.tpl.result,{
                            "SMALL":scoreArr[i],
                            "BIG":scoreArr[i+1]
                        }));
                    };
                    $(".resultTextWrap").html(resultArr.join(""));
                    $(this).hide();
                    $(".resultTextWrap").show();
                    $(".saveScoreText").show();
                }
            });
            $(".saveScoreText").on("click",function(){
                //单选
                if(wj.voteType=="single"){
                    var arr=[],scoreText="";
                    $(".resultTextWrap textarea").each(function(i,v){
                        arr.push($(".resultTextWrap .scoreRange").eq(i).html()+"{gap}"+$(this).val());
                    });
                    scoreText=arr.join("|");
                    $.ajax({
                        "url":"handle/createtest.php",
                        "type":"post",
                        "dataType":"json",
                        "data":{
                            "action":"create",
                            "ask":wj.askStr,
                            "answer":wj.answerStr,
                            "acTitle":wj.acTitle,
                            "acIntro":wj.acIntro,
                            "tiValue":"",
                            "scoreText":scoreText,
                            "voteType":wj.voteType
                        },
                        "success":function(data){
                            if(data && data["result"]=="200"){
                                if(wj.voteType=="single"){
                                    wj.type=1;
                                }else if(wj.voteType=="diy"){
                                    wj.type=2;
                                };
                                $("#main>div").hide();
                                $(".success").show();
                                //diy字段是tiId,以后解决
                                var id=data["id"];
                                $(".tiUrl").attr("href","index.php?id="+id+"&type="+wj.type).html("index.php?id="+id+"&type="+wj.type);
                            }else{
                                alert("创建不成功!");
                            };
                        },
                        "error":function(){
                            alert("网络错误!");
                        }
                    })
                }else if(wj.voteType=="diy"){
                    //自定义分值
                    var arr=[],scoreText="";
                    $(".resultTextWrap textarea").each(function(i,v){
                        arr.push($(".resultTextWrap .scoreRange").eq(i).html()+"{GAP}"+$(this).val());
                    });
                    scoreText=arr.join("|");
                    $.ajax({
                        "url":"handle/createtest.php",
                        "type":"post",
                        "dataType":"json",
                        "data":{
                            "action":"create",
                            "author":"",
                            "acTitle":wj.acTitle,
                            "acIntro":wj.acIntro,
                            "voteType":wj.voteType,
                            "ask":wj.askStr,
                            "optionsText":wj.optionsText,
                            "optionsValue":wj.optionsValue,
                            "scoreText":scoreText
                        },
                        "success":function(data){
                            if(data && data["result"]=="200"){
                                if(wj.voteType=="single"){
                                    wj.type=1;
                                }else if(wj.voteType=="diy"){
                                    wj.type=2;
                                }
                                $("#main>div").hide();
                                $(".success").show();
                                var id=data["tiId"];
                                $(".tiUrl").attr("href","index.php?id="+id+"&type="+wj.type).html("index.php?id="+id+"&type="+wj.type);
                            }else{
                                alert("创建不成功!");
                            };
                        },
                        "error":function(){
                            alert("网络错误!");
                        }
                    })
                };
            });
        }
    };
    wj.init();
}());
</script>
</body>
</html><?php }} ?>