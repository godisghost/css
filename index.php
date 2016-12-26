<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <META HTTP-EQUIV="Pragma" CONTENT="no-cache"> 
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache"> 
<META HTTP-EQUIV="Expires" CONTENT="0">
  <title>京东网上商城</title>
  <link rel="shortcut icon" type="image/jpg" href="static/image/icon.jpg">
  <link rel="stylesheet" type="text/css" href="static/css/base.css">
</head>
<style type="text/css">

</style>
<script type="text/javascript">
  /*根据传递进来的元素id值，查找该元素，将display的属性值赋值为传递进来的第二个参数dp*/
  function showOrHide(id, dp) {
    document.getElementById(id).style.display = dp;
  }
</script>
<body>
  <!--收藏和登录条-->
  <div id="top">
    <div id="top_bar">
      <img src="static/image/star.jpg" style="width: 12px;height: 12px;">
      <a href="javascript:void(0)">收藏京东</a>
      <ul class="rt">
        <li>
          您好！欢迎来到京东！
          <a href="#">[登录]</a>
          <a href="#">[免费注册]</a>
        </li>
        <li>
          <b></b>
          <a href="#">我的订单</a>
        </li>
        <li id="vip">
          <b></b>
          <a href="#">会员俱乐部</a>
        </li>
        <li id="dakehu">
          <b></b>
          <a href="#">企业频道</a>
        </li>
        <li id="app_jd" onmouseover="showOrHide('aj_dropdown','block')" onmouseout="showOrHide('aj_dropdown','none')">
          <b></b>
          <span>
            <a href="#">手机京东</a>
            <div id="aj_dropdown" onmouseover="showOrHide('aj_dropdown','block')" onmouseout="showOrHide('aj_dropdown','none')" class="top_bar_dropdown">
              <div>
                京东客户端
                <div></div>
                <div></div>
              </div>
              <div>
                网银钱包客户端
                <div></div>
                <div></div>
              </div>
            </div>
          </span>  
        </li>
        <li id="customer_service">
          <b></b>
          <a href="#" onmouseover="showOrHide('cs_dropdown','block')" onmouseout="showOrHide('cs_dropdown','none')">客户服务</a>
          <div id="cs_dropdown" onmouseover="showOrHide('cs_dropdown','block')" onmouseout="showOrHide('cs_dropdown','none')" class="top_bar_dropdown">
            <ul>
              <li><a href="#">帮助中心</a></li>
              <li><a href="#">售后服务</a></li>
              <li><a href="#">在线客服</a></li>
              <li><a href="#">培训中心</a></li>
              <li><a href="#">客服邮箱</a></li>
            </ul>
          </div>
        </li>
        <li id="site_map">
          <b></b>
          <a href="#" onmouseover="showOrHide('sm_dropdown','block')" onmouseout="showOrHide('sm_dropdown','none')">网站导航</a>
          <div id="sm_dropdown" onmouseover="showOrHide('sm_dropdown','block')" onmouseout="showOrHide('sm_dropdown','none')" class="top_bar_dropdown">
            <h3>特色栏目</h3>
            <ul>
              <li><a href="#">京东通信</a></li>
              <li><a href="#">校园之星</a></li>
              <li><a href="#">视频购物</a></li>
              <li><a href="#">京东社区</a></li>
              <li><a href="#">在线读书</a></li>
              <li><a href="#">装机大师</a></li>
              <li><a href="#">京东 E 卡</a></li>
              <li><a href="#">家装城</a></li>
              <li><a href="#">搭配购</a></li>
              <li><a href="#">我喜欢</a></li>
              <li><a href="#">游戏社区</a></li>
            </ul>
            <div class="clr"></div>
            <h3>企业服务</h3>
            <ul>
              <li><a href="#">企业采购</a></li>
              <li><a href="#">办公直通车</a></li>
            </ul>
            <div class="clr"></div>
            <h3>旗下网站</h3>
            <ul>
              <li><a href="#">English Site</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!--LOgo和搜索栏-->
  <div id="top_main">
    <h4>LOgo和搜索栏</h4>
  </div>
  
  <!--导航栏-->
  <div id="nav">
    导航栏
  </div>

  <!--主体区-->
  <div id="main">
    主体区
  </div>

  <!--猜你喜欢-->
  <div id="may_like">
    猜你喜欢
  </div>

  <!--最近浏览-->
  <div id="recent_view">
    最近浏览
  </div>

  <!--购物指南-->
  <div id="foot_bar">
    购物指南
  </div>

  <!--页脚-->
  <div id="footer">
    页脚
  </div>
</body>
</html>