<head>
<style> 
div
{
border:15px solid transparent;
width:300px;
padding:10px 20px;
}

#round
{
border-image:url(/border.png) 30 30 round;
}

#stretch
{
border-image:url(/border.png) 30 30 stretch;
}
</style>
</head>
<body>

<div id="round">在这里，图片铺满整个边框。</div>
<br>
<div id="stretch">在这里，图片被拉伸以填充该区域。</div>

<p>这是我们使用的图片：</p>
<img src="/border.png">

<p><b>注释：</b> Internet Explorer 不支持 border-image 属性。</p>
<p>border-image 属性规定了用作边框的图片。</p>

</body>
</html>