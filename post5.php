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
 <?php
  $bgimg=$_POST["bgimg"];
  $lianxi=$_POST["lianxi"];
  $peizhi=$_POST["peizhi"];
  $haoma=$_POST["haoma"];
  $neirong=$_POST["neirong"];
  $jianjie=$_POST["jianjie"];
  $alipay=$_POST["alipay"];
  $touxiang=$_POST["touxiang"];
?>


<?php
$out = 
<<<EOF
<div style="width:1193px;height:300px;position:absolute;left:-20px;top:-60px;overflow:hidden;background: url({$bgimg}) no-repeat 0px -91px;background-size:100%;">
 
        <div style="width:1180px;height:250px;overflow:hidden;border-radius:10px;box-shadow:3px 5px 10px #808080;margin: 20px 0px 0px 4px;background: rgba(0, 0, 0, 0.27);">
            <div style="width: 220px;height:220px;float:left;background:url({$touxiang}) no-repeat;background-size:100%;margin: 10px 18px 0px 11px;border-radius:5px;">
 
            </div>
 
 
            <div style="width: 327px;height:220px;float:left;padding-top:5px;color:#ffffff;font-size:17px;">
 
                <div style="width:300px;height: 135px;">
 
                    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#FF6666;">
                        &gt;关于主播&lt;
                    </div>
 
                    <div style="width: 320px;height: 112px;font-size: 14px;">
					{$jianjie}
                    </div>
 
                </div>
 
                <div style="width:300px;height:110px;">
 
                    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#FF9966;">
                        &gt;直播时间&lt;
                    </div>
 
                    <div style="width:300px;height:85px;font-size: 14px;">
					{$peizhi}
                    </div>
 
                </div>
 
 
            </div>
 
 
 
            <div style="width: 331px;height:220px;float:left;padding-top:5px;color:#ffffff;font-size:17px;">
 
                <div style="width:300px;height: 135px;">
 
                    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#B0D96B;">
                        &gt;直播内容&lt;
                    </div>
 
                    <div style="width: 322px;height:85px;font-size: 14px;">
                     
					 {$neirong}
                    </div>
 
                </div>
 
                <div style="width:300px;height:110px;">
 
                    <div style="width: 186px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#AFDCE0;">
                        &gt;关爱主播&lt;
                    </div>
 
                    <div style="width: 322px;height:85px;font-size: 14px;">
					{$lianxi}
                    </div>
 
                </div>
 
 
            </div>
 
 
            <div style="width:250px;height:220px;float:left;">
                <div style="width:180px;height:25px;line-height:25px;text-align:center;color:#ffffff;font-size:17px;">扫描即可投喂</div>
                <div style="width:170px;height:170px;background:url({$alipay}) no-repeat;background-size:100%;"></div>
                <div style="width:180px;height:25px;line-height:25px;text-align:center;color:#ffffff;font-size:14px;">感谢各位老爷赞助猫粮~记得带上B站id哟</div>
            </div>
        </div>
        <span style="position:absolute;bottom:0px;left:0px;font-size: 14px;background: #86DFFF;border-radius:0px 3px 0px 0px;"><a href="http://www.txsb.vip" title="由April's Blog提供的简介卡生成服务 点击可以直接到达" target="_blank" style="color:#270E14;">April's Blog</a></span>
    </div>
    <p style="width:1px;height:220px;">.</p>
	
EOF;
echo htmlentities($out);
?>	
	
	 </div>
  <h4>再提示一次在直播间粘贴代码的时候请使用代码模式 也就是工具栏上的第一个按钮（括号一样的）</h4>
  <p>感谢您使用本弱鸡制作的B站简介卡生成工具,如果喜欢可以支持一下我的微博@王慕独</p>
    </div>
  <div class="y">
   <div id="title"><h1 style="display: initial;">生成预览</h1><h4 style="display:inline">(可能与B站实际效果有略微区别)</h4></div>
   
   <div style="width:1193px;height:300px;left:-20px;top:-60px;overflow:hidden;background: url(<?php echo $_POST["bgimg"]; ?>) no-repeat 0px -91px;background-size:100%;">
 
        <div style="width:1180px;height:250px;overflow:hidden;border-radius:10px;box-shadow:3px 5px 10px #808080;margin: 20px 0px 0px 4px;background: rgba(0, 0, 0, 0.27);">
            <div style="width: 220px;height:220px;float:left;background:url(<?php echo $_POST["touxiang"]; ?>) no-repeat;background-size:100%;margin: 10px 18px 0px 11px;border-radius:5px;">
 
            </div>
 
 
            <div style="width: 327px;height:220px;float:left;padding-top:5px;color:#ffffff;font-size:17px;">
 
                <div style="width:300px;height: 135px;">
 
                    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#FF6666;">
                        &gt;关于主播&lt;
                    </div>
 
                    <div style="width: 320px;height: 112px;font-size: 14px;">
                        <?php echo $_POST["jianjie"]; ?>
                    </div>
 
                </div>
 
                <div style="width:300px;height:110px;">
 
                    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#FF9966;">
                        &gt;直播时间&lt;
                    </div>
 
                    <div style="width:300px;height:85px;font-size: 14px;">
                        <?php echo $_POST["peizhi"]; ?>
                    </div>
 
                </div>
 
 
            </div>
 
 
 
            <div style="width: 331px;height:220px;float:left;padding-top:5px;color:#ffffff;font-size:17px;">
 
                <div style="width:300px;height: 135px;">
 
                    <div style="width:120px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#B0D96B;">
                        &gt;直播内容&lt;
                    </div>
 
                    <div style="width: 322px;height:85px;font-size: 14px;">
                       <?php echo $_POST["neirong"]; ?>
                    </div>
 
                </div>
 
                <div style="width:300px;height:110px;">
 
                    <div style="width: 186px;height:25px;border-radius:3px;text-align:center;line-height:25px;font-size:18px;background:#AFDCE0;">
                        &gt;关爱主播&lt;
                    </div>
 
                    <div style="width: 322px;height:85px;font-size: 14px;">
                        <?php echo $_POST["lianxi"]; ?>
                    </div>
 
                </div>
 
 
            </div>
 
 
            <div style="width:250px;height:220px;float:left;">
                <div style="width:180px;height:25px;line-height:25px;text-align:center;color:#ffffff;font-size:17px;">扫描即可投喂</div>
                <div style="width:170px;height:170px;background:url(<?php echo $_POST["alipay"]; ?>) no-repeat;background-size:100%;"></div>
                <div style="width:180px;height:25px;line-height:25px;text-align:center;color:#ffffff;font-size:14px;">感谢各位老爷赞助猫粮~记得带上B站id哟</div>
            </div>
        </div>
   </div>
    <p style="width:1px;height:220px;">.</p>
	
	  </body>
  </html>
