<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>[=PhpProxy=] 在线代理--></title>
<script>
function chg_lang(){
   document.phpproxy.submit();
}
</script>
</head>
<body bgcolor="#3399CC" text="#000000">
<form action="" method=post name="phpproxy" id="phpproxy">
  <blockquote>
    <div align="left">
      <p><strong><font size="5" face="Arial, Helvetica, sans-serif">[=PhpProxy=]
        在线代理--></font></strong></p>
      <p> <font size="5">Url&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:
        <input type=text  height=20 name=url >
        <font size="3">您要访问的网址</font><br>
        <font size="2"> 一般可不填，用本服务器的ip</font><font size="2">，如果您要用代理访问请输入代 理服务器的
        ip</font><br>
        Proxy Server:
        <input type=text  height=20 name=proxyserver>
        </font><font size="5"><br>
        <font size="5"> Proxy Port&nbsp;&nbsp;:
        <input type=text  height=20 name=proxyport >
        <font size="3">代理服务器的端口号(默认为80)</font> </font></p>
      <p>
        <font size="5"> Language&nbsp;&nbsp;&nbsp;&nbsp;:
        <select  height=20 name=lang onchange="chg_lang()">
        <option value="" >====选 择 语 言====</option>
        <?
        if ($dh = opendir(getcwd())) {
            while (($file = readdir($dh)) !== false) {
               if ($file != '..' && $file != '.'){
                   $p=pathinfo($file);
                   $value=substr($file,0,strlen($file)-strlen($p['extension'])-1);
                   echo "<option value=\"$value\" >==$value==</option>";

               }

            }
            closedir($dh);
        }
        ?>
        </select>
      <p><br>
        <input type=submit height=16 name=phpproxy value="浏览网页">
        <input type="checkbox" name="hide_mini_form" onclick="{document.phpproxy.hide_mini_form.value=document.phpproxy.hide_mini_form.value="checked" ? "":"checked";}">Hide Form
      </p>
      </div>
  </blockquote>
</form>

<blockquote>
  <p><tt>功能列表(version 2.1)：</tt></p>
  <p><tt>1.支持图象显示。</tt></p>
  <p><tt>2.可以向服务器get，post数据，可以传递cookie。现在支持上传文件。</tt></p>
  <p><tt>3.支持http，https协议，但 https 需要 php 安装 openssl 模块。</tt></p>
  <p><tt>4.支持代理服务器设置。</tt>
  <p><tt>5.增加了配置文件,更易于设置各项功能,可以开放phpproxy,也可仅指向某个网页。</tt></p>
  <br>
  </p>
  <p>&nbsp; </p>
</blockquote>
<div align="center">

  <p><font size="3">]<a href="http://yabsoft.biz" target="_blank">主站点</a>[===]<a href="http://members.lycos.co.uk/dotop/phpBB2" target="_blank">
    论坛支持</a>[</font></p>
  <p><font size="3">PhpProxy&copy;雅步子2004-2005</font></p>
</div>
