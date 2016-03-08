<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>eric_lu</title>  
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="/eblogbeta/Public/home/css/zerogrid.css">
    <link rel="stylesheet" href="/eblogbeta/Public/home/css/style.css">
    <link rel="stylesheet" href="/eblogbeta/Public/home/css/responsive.css">
    
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->

</head>
<body>
	<!-- 头部 -->
	<div class="wrap-body zerogrid">
<!--------------Header--------------->
<header>
    <div class="wrap-header">
        
        <div class="top">
            <div class="socials">
            
                <!--if condition="is_login()">
                <ul class="nav" style="margin-right:0">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:0;padding-right:0">:get_username()} <b class="caret"></b></a>
                            
                        <a href="<?php echo U('User/logout');?>">退出</a>
                           
                    </li>
                </ul>
            else/>-->
                <ul class="nav" style="margin-right:0">
                    <li>
                        <a href="<?php echo U('Admin/index/login');?>">登录</a>
                    </li>
                        
                </ul>
            <!--</if>-->
                    
               
            </div>
            <div id="search">
                <div class="button-search"></div>
                <input type="text" value="Search..." onFocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onBlur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
            </div>
        </div>
        
        <div id="logo">
            <a href="<?php echo U('index/index');?>"><h1>eric_lu</h1></a>
            <p>记录人生的点点滴滴！</p>
        </div>
        
        <nav>
            <div class="wrap-nav">
                <div class="menu">
                    <ul>
                        <li><a href="<?php echo U('index/index');?>">主页</a></li>
                        <li><a href="#">新随笔</a></li>
                        <li><a href="#">音乐</a></li>
                        <li><a href="#">收录</a></li>
                        <li><a href="#">留言墙</a></li>
                        <li><a href="#">下载</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </div>
</header>
	<!-- /头部 -->
	
	<!-- 主体 -->
	<section id="content">
	    <div class="wrap-content">
	        <div class="row block">
	        	<div id="main-content" class="col-2-3">
    <div class="wrap-col">
        <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><article>
                <div class="heading">
                <h3>
                    <a href="<?php echo U('Article/detail?id='.$vo['id']);?>"><?php echo ($vo["title"]); ?></a>
                </h3>
                </div>
                                        
                <div class="content">                                
                    <p><?php echo ($vo["content"]); ?></p>
                </div>
            </article><?php endforeach; endif; else: echo "" ;endif; ?>    
    </div>
</div>
	        	            <div id="sidebar" class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h2>音乐播放器</h2></div>
                        <div class="content">
                            <ul>
                                <li><a href="#">先占个位置</a></li>                         
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading"><h2>天气</h2></div>
                        <div class="content">
                            <p><?php echo ($city); ?></p>
                            <p><?php echo ($weather); ?></p>
                            <p><?php echo ($l_tmp); ?>-<?php echo ($h_tmp); ?>℃</p>
                        </div>                        
                    </div>
                    <div class="box">
                        <div class="heading"><h2>随笔分类</h2></div>
                        <div class="content">
                            <ul>
                                <li><a href="#">读书</a></li>
                                <li><a href="#">思考</a></li>
                                <li><a href="#">学习</a></li>                               
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading"><h2>随笔档案</h2></div>
                        <div class="content">
                            <ul>
                                <li><a href="#">2016年1月</a></li>
                                <li><a href="#">2016年2月</a></li>
                                <li><a href="#">2016年3月</a></li>                   
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
	        </div>
	    </div>
	</section>
	<!-- /主体 -->

	<!-- 底部 -->
	<footer>
    <div class="copyright">
        <p>Copyright © eric_lu</p>
    </div>
</footer>
</div>
	<!-- /底部 -->
</body>
</html>