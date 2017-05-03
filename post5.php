<html>
  <head>
<link rel="stylesheet" href="style.css">
<?php include 'sjbg.php';?>
<style>
  body {
    background: url(<?php echo $sjbg[$r] ?>) fixed;
    background-size: cover;
}
  </style>

</head>
  <body>
<div class="code">
 <div id="title"><h1>生成代码如下 请复制黑色区域内容</h1></div>
  <div class="c">

&lt;div style=&quot;width:1193px;height:300px;position:absolute;left:-20px;top:-60px;overflow:hidden;background:url( <?php echo $_POST["bgimg"]; ?>);background-size:100%;&quot;&gt;
    &lt;div style=&quot;width:1170px;height: 255px;position: relative;top: 10px;left: 11px;border-radius:10px;box-shadow:3px 5px 10px #808080;background: rgba(13, 0, 0, 0.22);&quot;&gt;
    &lt;div style=&quot;width: 418px;height:255px;float:left;padding-top:5px;color: #0A0000;font-size:17px;margin-left: 41px;&quot;&gt;
    &lt;div style=&quot;width:350px;height:150px;&quot;&gt;
    &lt;div style=&quot;width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size: 20px;background: rgba(255, 102, 102, 0.73);&quot;&gt;
                        主播简介
                    &lt;/div&gt;
    &lt;div style=&quot;width: 394px;height: 105px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;&quot;&gt;
                         <?php echo $_POST["jianjie"]; ?>
                    &lt;/div&gt;
                &lt;/div&gt;
    &lt;div style=&quot;width:350px;height:105px;&quot;&gt;
    &lt;div style=&quot;width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size: 20px;background: rgba(255, 204, 204, 0.78);&quot;&gt;
                        直播内容
                    &lt;/div&gt;
    &lt;div style=&quot;width: 396px;height: 55px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;&quot;&gt;
                       <?php echo $_POST["neirong"]; ?>
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    &lt;div style=&quot;width:200px;height:250px;float:left;margin-left:10px;font-size:16px;color: #0D0000;padding-top:10px;&quot;&gt;
    &lt;div style=&quot;width:200px;height: 30px;text-align:center;line-height: 30px;font-size: 21px;border-radius: 5px 5px 0px 0px;background: rgba(174, 172, 172, 0.88);&quot;&gt;
                    扫码投食哟
                &lt;/div&gt;
    &lt;div style=&quot;width:200px;height: 199px;border-radius:0px 0px 3px 3px;background:url( <?php echo $_POST["alipay"]; ?>) no-repeat 0px 0px;background-size:100%;&quot;&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    &lt;div style=&quot;width:350px;height:255px;float:left;padding-top:5px;color: #080000;font-size:17px;margin-left:20px;&quot;&gt;
    &lt;div style=&quot;width:350px;height: 150px;&quot;&gt;
    &lt;div style=&quot;width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background: rgba(255, 255, 204, 0.71);&quot;&gt;
                        直播时间
                    &lt;/div&gt;
    &lt;div style=&quot;width: 381px;height: 106px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;&quot;&gt;
                         <?php echo $_POST["peizhi"]; ?>
                    &lt;/div&gt;
                &lt;/div&gt;
    &lt;div style=&quot;width:350px;height:105px;&quot;&gt;
    &lt;div style=&quot;width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size: 20px;background: rgba(255, 204, 153, 0.74);&quot;&gt;
                        联系方式
                    &lt;/div&gt;
    &lt;div style=&quot;width: 380px;height: 55px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;&quot;&gt;
                         <?php echo $_POST["lianxi"]; ?>
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;span style=&quot;position:absolute; bottom:0px; left:0px; font-size: 19px; background:rgba(222, 212, 211, 0.8); border-radius:0px 3px 0px 0px;&quot;&gt;&lt;a href=&quot;http://www.txsb.vip&quot; title=&quot;由April&#x27;s Blog提供的简介卡生成服务 点击可以直接到达&quot; target=&quot;_blank&quot; style=&quot;color:#270E14;&quot;&gt;April&#x27;s Blog&lt;/a&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;p style=&quot;width:1px;height:220px;&quot;&gt;.&lt;/p&gt;
	
	
	 </div>
  <h4>再提示一次在直播间粘贴代码的时候请使用代码模式 也就是工具栏上的第一个按钮（括号一样的）</h4>
  <p>感谢您使用本弱鸡制作的B站简介卡生成工具,如果喜欢可以支持一下我的微博@王慕独</p>
    </div>
   <div class="y">
   <div id="title"><h1 style="display: initial;">生成预览</h1><h4 style="display:inline">(可能与B站实际效果有略微区别)</h4></div>
   <div style="width:1193px;height:300px;left:-20px;top:-60px;overflow:hidden;background:url(<?php echo $_POST["bgimg"]; ?>);background-size:100%;">
    <div style="width:1170px;height: 255px;position: relative;top: 10px;left: 11px;border-radius:10px;box-shadow:3px 5px 10px #808080;background: rgba(13, 0, 0, 0.22);">
    <div style="width: 418px;height:255px;float:left;padding-top:5px;color: #0A0000;font-size:17px;margin-left: 41px;">
    <div style="width:350px;height:150px;">
    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size: 20px;background: rgba(255, 102, 102, 0.73);">
                        主播简介
                    </div>
    <div style="width: 394px;height: 105px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;">
                        <?php echo $_POST["jianjie"]; ?>
                    </div>
                </div>
    <div style="width:350px;height:105px;">
    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size: 20px;background: rgba(255, 204, 204, 0.78);">
                        直播内容
                    </div>
    <div style="width: 396px;height: 55px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;">
                        <?php echo $_POST["neirong"]; ?>
                    </div>
                </div>
            </div>
    <div style="width:200px;height:250px;float:left;margin-left:10px;font-size:16px;color: #0D0000;padding-top:10px;">
    <div style="width:200px;height: 30px;text-align:center;line-height: 30px;font-size: 21px;border-radius: 5px 5px 0px 0px;background: rgba(174, 172, 172, 0.88);">
                    扫码投食哟
                </div>
    <div style="width:200px;height: 199px;border-radius:0px 0px 3px 3px;background:url(<?php echo $_POST["alipay"]; ?>) no-repeat 0px 0px;background-size:100%;">
                </div>
            </div>
    <div style="width:350px;height:255px;float:left;padding-top:5px;color: #080000;font-size:17px;margin-left:20px;">
    <div style="width:350px;height: 150px;">
    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background: rgba(255, 255, 204, 0.71);">
                        直播时间
                    </div>
    <div style="width: 381px;height: 106px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;">
                        <?php echo $_POST["peizhi"]; ?>
                    </div>
                </div>
    <div style="width:350px;height:105px;">
    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size: 20px;background: rgba(255, 204, 153, 0.74);">
                        联系方式
                    </div>
    <div style="width: 380px;height: 55px;background: rgba(240, 236, 236, 0.48);padding: 9px 0px 0px 13px;margin-top: 5px;border-radius: 5px;">
                        <?php echo $_POST["lianxi"]; ?>
                    </div>
                </div>
            </div>
        </div>
  </div>
    <p style="width:1px;height:220px;">.</p>
    </div>
    </body>
  </html>
