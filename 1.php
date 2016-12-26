<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="utf-8" />
<title>结构性伪类选择符 E:first-child_CSS参考手册_web前端开发参考手册系列</title>
<meta name="author" content="Joy Du(飘零雾雨), dooyoe@gmail.com, www.doyoe.com" />
<style>
h1 {
	font-size: 16px;
}
ul>:first-child {
	color: #f00;
}
</style>
</head>
<body>
<h1>注意是li:first-child，而不是ul:first-child</h1>
<ul>
	<li>结构性伪类选择符 E:first-child</li>
	<ul>
		<li>结构性伪类选择符 E:first-child</li>
		<li>结构性伪类选择符 E:first-child</li>
		<li>结构性伪类选择符 E:first-child</li>
		<li>结构性伪类选择符 E:first-child</li>
	</ul>
	<li>结构性伪类选择符 E:first-child</li>
	<li>结构性伪类选择符 E:first-child</li>
	<li>结构性伪类选择符 E:first-child</li>
</ul>
</body>
</html>