<?php /* Smarty version 2.6.16, created on 2014-03-10 16:32:42
         compiled from template_member_test.php */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>天昊生物医药科技(苏州)有限公司</title>
<meta name="keywords" content="天昊生物医药科技(苏州)有限公司">
<meta name="description" content="">
<link href="templets/default_diagnostics/style/reset.css" rel="stylesheet" type="text/css">
<link href="templets/default_diagnostics/style/style.css" rel="stylesheet" type="text/css">
<link href="templets/default_diagnostics/style/navigation.css" rel="stylesheet" type="text/css">
<script src="templets/default_diagnostics/style/stuHover.js" type="text/javascript"></script>
<script src="templets/default_diagnostics/style/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#hotPro>dd>dl>dd").hide();
        $.each($("#hotPro>dd>dl>dt"), function () {
            //$("#electrical>dd>dl>dd:first").show();
            $(this).click(function () {
                $("#hotPro>dd>dl>dd").not($(this).next()).slideUp();
                $(this).next().slideToggle(500);
                //$(this).next().toggle();
            });
        });
        $("#left_top_dl>dd>dl>dd").hide();
        $.each($("#left_top_dl>dd>dl>dt"), function () {
            //$("#electrical>dd>dl>dd:first").show();
            $(this).click(function () {
                $("#left_top_dl>dd>dl>dd").not($(this).next()).slideUp();
                $(this).next().slideToggle(500);
                //$(this).next().toggle();
            });
        });
    });
</script>
<script type="text/javascript">
    function nTabs(thisObj, Num) {
        if (thisObj.className == "active") return;
        var tabObj = thisObj.parentNode.id;
        var tabList = document.getElementById(tabObj).getElementsByTagName("li");
        for (i = 0; i < tabList.length; i++) {
            if (i == Num) {
                thisObj.className = "active";
                document.getElementById(tabObj + "_Content" + i).style.display = "block";
            } else {
                tabList[i].className = "normal";
                document.getElementById(tabObj + "_Content" + i).style.display = "none";
            }
        }
    }
</script>
</head>
<body id="technology1">
<!-- head-->
<?php include("templets/default_diagnostics/head_suzhou.php") ?>
<!-- head-->

<!--技术中心内页banner图片-->
<div id="banner_bg2">
<div id="banner2">
<img src="templets/default_diagnostics/img/2013022840920501.png" alt="技术中心内页banner图片">
</div>
</div>

<!--
<div class="index_main_top">
    <div class="index_top_notice">
    <div id="new_rool_msg">
    {dede:arclist titlelen='68' typeid='25' row='5' flag='' orderby='pubdate'}
	<a href="[field:arcurl/]">[field:title/]&nbsp;&nbsp;[field:pubdate function="MyDate('20y-m-d',@me)"/]</a>
	{/dede:arclist}
    </div> 
        <script type="text/javascript">
            var c, _ = Function;
            with (o = document.getElementById("new_rool_msg")) { innerHTML += innerHTML; onmouseover = _("c=1"); onmouseout = _("c=0"); }
            (F = _("if(#%20||!c)#++,#%=o.scrollHeight>>1;setTimeout(F,#%20?10:1500);".replace(/#/g, "o.scrollTop")))();
        </script>
    </div>
</div>
-->


<div id="container">
<div id="main">


<!-- left-->
	<div id="leftsiderbar">
        <div id="project_left">
            <h1></h1>
            <dl id="left_top_dl">
                <dd>
                <dl>
                    
                        <dt><span>我的管理中心</span></dt>
                        <dd style="display: none;">
                            <ul>
                        
							<?php if ($_SESSION['role'] > 0): ?>
                            <li><a href="project_user.php">我的项目</a></li>
							<?php endif; ?>
						
                            <li><a href="member_info.php">客户信息</a></li>
                        
                            <li><a href="member_passwd.php">密码修改</a></li>
                        
                            <li><a href="member_order.php">订单查询</a></li>
                        
                            <li><a href="downloads.php">资料下载</a></li>
                        
                            </ul>
                        </dd>
                    
                        <dt><span>其它</span></dt>
                        <dd style="display: none;">
                            <ul>

                            <li><a href="http://mail.geneskybiopharm.com" target="_blank">邮箱登录</a></li>
                        
                            <li><a href="http://192.168.1.10:8000" target="_blank">生物信息软件</a></li>
                        
                            <li><a href="help.php" target="_blank">帮助说明</a></li>
                        
                            </ul>
                        </dd>
                                        
                </dl>
                </dd>
            </dl>
        </div>
 </div>
<!-- left-->

    <div id="rightsiderbar">
	<div id="nei"> 
 
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="font-size:16px">
<tr><td><?php echo $this->_tpl_vars['maincontent']; ?>
</td></tr>
</table>
        </div>     
    </div>
</div>
</div>
<!-- foot-->
<?php include("templets/default_diagnostics/foot_suzhou.php") ?>
<!-- foot-->
</body></html>