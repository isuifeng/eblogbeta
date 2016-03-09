<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	    <meta charset="UTF-8">
    <title>eblog管理平台</title>
    <link rel="stylesheet" type="text/css" href="/eblogbeta/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/eblogbeta/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/eblogbeta/Public/Admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/eblogbeta/Public/Admin/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/eblogbeta/Public/Admin/css/default_color.css" media="all">

</head>
<body>
	<!-- 头部 -->
	<!-- 头部 -->
    <div class="header">       

        <!-- 主导航 -->
        <ul class="main-nav">
            <li class=""><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="current"><a href="#">内容</a></li>
            <li class=""><a href="#">用户</a></li>
            <li class=""><a href="#">系统</a></li>
            <li class=""><a href="#">扩展</a></li>       
        </ul>
        <!-- /主导航 -->

        <!-- 用户栏 -->
        <div class="user-bar">            
                <span style="color:#FBFBFB">欢迎你，</span><a style="color:#FBFBFB" href="#">admin</a>
                <a style="color:#FBFBFB" href="#">修改密码</a>
                <a style="color:#FBFBFB" href="#">修改昵称</a>
                <a style="color:#FBFBFB" href="#">退出</a>
        </div>
    </div>
<!-- /头部 -->
	<!-- /头部 -->
	
	<!-- 主体 -->
	    <!-- 边栏 -->
    <div class="sidebar">
        <!-- 子导航 -->        
            <div id="subnav" class="subnav">           
                <h3><a href="#">文章列表</a></h3>
                <h3><a href="#">草稿箱</a></h3>
                <h3><a href="#">评论</a></h3>
            </div>        
        <!-- /子导航 -->
    </div>
    <!-- /边栏 -->


	<!-- 内容区 -->
<div id="main-content">
    <div id="top-alert" class="fixed alert alert-error" style="display: none;">
        <button class="close fixed" style="margin-top: 4px;">&times;</button>
        <div class="alert-content">这是内容</div>
    </div>
    
    <div id="main" class="main">
    	

    	<!-- 按钮工具栏 -->
    	<div class="cf">
            <button class="btn ajax-post" target-form="ids" url="#">新 增</button>
		</div>

	<!-- 数据表格 -->
    <div class="data-table">
		<table>
            <!-- 表头 -->
            <thead>
                <tr>                    
                    <th>编号</th>
                    <th>标题</th>
                    <th>类型</th>
                    <th>优先级</th>
                    <th>最后更新</th>
                    <th>状态</th>
                    <th>浏览</th>
                    <th>操作</th>               
                </tr>
            </thead>

            <!-- 列表 -->
            <tbody>
                <tr>                    
                    <td>1</td>
                    <td><a href="#">OneThink1.0正式版发布</a></td>
                    <td>主题</td>
                    <td>0</td>
                    <td>2013-12-17 14:51</td>
                    <td>正常</td>
                    <td>8</td>
                    <td><a href="#">编辑</a> <a href="#">删除</a></td>                   
                </tr>            
            </tbody>
        </table>
	</div>

	<!-- 分页 -->
    <div class="page">
        <div class="cont-ft">
            <div class="copyright">
                <div class="fl">eblog管理平台
            </div>
        </div>
    </div>
    <!-- /内容区 -->

	<!-- /主体 -->

	<!-- 底部 -->
	
	<!-- /底部 -->
</body>
</html>