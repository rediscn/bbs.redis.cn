<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('sign');
0
|| checktplrefresh('./source/plugin/dsu_paulsign/template/touch/sign.htm', './template/default/mobile/common/header.htm', 1461572720, 'dsu_paulsign', './data/template/1_dsu_paulsign_touch_sign.tpl.php', './source/plugin/dsu_paulsign/template', 'touch/sign')
|| checktplrefresh('./source/plugin/dsu_paulsign/template/touch/sign.htm', './template/default/mobile/common/footer.htm', 1461572720, 'dsu_paulsign', './data/template/1_dsu_paulsign_touch_sign.tpl.php', './source/plugin/dsu_paulsign/template', 'touch/sign')
;?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.3;  minimum-scale=1.0; maximum-scale=2.0"/>
<meta name="MobileOptimized" content="240"/>
<meta name="Iphone-content" content="320"/>
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版 - Powered by Discuz!</title>
<style type="text/css">
* { margin: 0; padding: 0; word-wrap: break-word; }
ul li, .xl li { list-style: none; }
.xw0 { font-weight: 400; }
.xw1 { font-weight: 700; }
.xg1, .xg1 a { color: #999 !important; }
.xg1 .xi2 { color: #999 !important; }
.xg2 { color: #666; }
.xi1, .onerror { color: #F60; }
.xi2, .xi2 a, .xi3 a { color: #369 ; }
.mtn { margin-top: 5px !important; }
.mbn { margin-bottom: 5px !important; }
.mtm { margin-top: 10px !important; }
.ptn { padding-top: 5px !important; }
.pbn { padding-bottom: 5px !important; }
.pd2 { padding: 2px !important; }
.pd5 { padding: 5px !important; }
.nopd { padding: 0px !important;}
.bt{ border-top: 1px #F2F2F2 solid !important; }
.bbn{ border-bottom: 1px #efefef solid !important; }
.ban { border: 1px #F2F2F2 solid !important;}
.xs0 { font-size : 8pt;}

a, .lkcss{ color: #004299; text-decoration: none;}
a img{ text-decoration: none; border: 0px none;}
EM { font-style: normal; }
img{border: 0;}

.odd { background: #FFF; }
.even { background: #fbfbff;}

.txt, .txt_s, .px { padding: 5px 0px; border: 1px solid #C3C3C3; background: #FFF url(./static/image/mobile/input_bg.gif) repeat-x 0 0px; width: 100%; }
.txt_s { width: 30px; }


body {background: #FFF; background-image:none; line-height: 130%; font-size: 10pt; font-style: normal; font-family: Arial,Helvetica,sans-serif; }

.hd { padding: 3px; border-bottom: 3px solid #2B7ACD; }
.hd a{ color: #2B7ACD; text-decoration: none; }
.wp { padding: 2px;}

.f_c { margin-top: 5px; padding: 5px; border: 1px #C2D5E3 solid; }
.f_c p{ line-height: 24px;}
/* common border */
.box { margin-top:3px; background: #fbfbff; padding: 3px 0; line-height:18px;}
.box h2 {}
.box .on { font-weight: 700; }
.box_ex { margin-top:0px; border-top: 0px none;}
.box_ex2{ margin-top:0px; border-top:0px none; border-left: 0px none; border-right: 0px none; }

.bm .bm_h { padding: 2px; background: #2A6EB4; border-bottom:1px #02254b solid; color: #FFF; line-height: 20px; font-size: 10pt;  }
.bm .bm_h a, .bm .bm_h .lkcss { color: #FFF; text-decoration: none;}
.bm .bm_c { padding: 3px 2px; border-bottom:1px solid #F2F2F2;  }
.bm .bm_c p{ margin-bottom: 5px; }
.bm .bm_c_bg { background: #f3f3ff; }
.bm .bm_c em { color: #999;}
.bm .bm_inf { background: #FBFBFF; padding: 5px 0;}
.bm_c .bm_user {  padding: 1px 0 1px 0px; line-height: 14px;}
.warning { margin-top: 4px; padding: 3px; border: 1px #CDCDCD solid; color:#666; }
.warning a{ color: #F26C4F;}

.pg { padding: 4px 0;}
.pg strong{ padding:2px 6px; }
.pg a{ padding: 2px 6px; }
.pipe { margin: 0 1px; font-size:12px; font-weight: 300; color: #c4c4c4; }

/* footer */
.ft{ margin:2px 0 2px 2px; padding: 1px; }

.fl { margin-top: 5px; }
.tl { margin-top: 5px;}
.tl a{ text-decoration: none;}
.tl .bm .bm_c img{ vertical-align: middle;}
.moder { margin-top: 2px; padding: 2px; border: 0px none; background: #FFF;}
.flif { border: none; background: none; color: #666;}
.ttp a{ margin: 0 2px;}

/* viewthread */
.vt { margin-top: 5px;}
.vt .bm .bm_h a { display: inline; width: auto;}
.vt .bm .bm_inf{ color: #444; }
.vt .bm .bm_c { padding: 1px; border-top: 1px #e9e9ff solid; border-bottom: 1px #e9e9ff solid; background: #fbfbff; color: #666;  }
.vt .pbody { margin-top: 1px; margin-bottom: 4px;}
.vt .pbody h2{ font-weight: 300;}
.vt .pbody .mes { padding: 1px;}
.vt .bm .bm_c .attach_h { margin-top: 4px;}
.vt .bm .bm_c .attach .vm{ width: 14px; vertical-align: middle;}
.attach img { width: 16px; vertical-align: middle; }
.vt .postmessage{ padding: 3px 0; line-height: normal;}
.inbox { padding: 3px 0;}
.viewimg { padding: 2px;}
.viewsort img { vertical-align:top; }

/* newpost */
.sort { padding: 2px; border: 1px #efefef solid; background: #FFF; }
.quote { padding: 5px; font-style: italic; }

/* profile */
.profile_bm_c { padding: 0px !important;}
.profile_table td{ padding:0 3px; border-top: 1px #efefef solid;}
.profile_table th { border-top: 2px #efefef solid;}
.jammer { font-size: 10px; color:#FFF;}
</style>
</head>
<body>
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<div class="hd"><a href="<?php echo $nav;?>" title="<?php if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?>手机版"><?php if($_G['setting']['mobile']['mobilesimpletype'] == 1) { if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版<?php } else { ?><img src="./static/image/mobile/logo.gif" /><?php } ?></a></div>
<div class="wp">
<div class="pd2">
<?php if($_G['uid']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile"><?php echo $_G['member']['username'];?></a><span class="pipe">|</span><a href="home.php?mod=space&amp;do=pm" <?php if($_G['member']['newpm']) { ?>class="xi1"<?php } ?>><?php if($_G['member']['newpm']) { ?>新短消息<?php } else { ?>消息<?php } ?></a><span class="pipe">|</span><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=favorite&amp;view=me&amp;type=forum">收藏</a><span class="pipe">|</span><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me">我的帖子</a><span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" title="退出">退出</a><?php } elseif($_G['connectguest']) { ?><?php echo $_G['member']['username'];?><span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" title="退出">退出</a><?php } else { ?><a href="member.php?mod=logging&amp;action=login" title="登录">登录</a><?php if($_G['setting']['regstatus']) { ?><span class="pipe">|</span><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="<?php echo $_G['setting']['reglinkname'];?>"><?php echo $_G['setting']['reglinkname'];?></a><?php } if($_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed']) { ?><span class="pipe">|</span><a href="<?php echo $_G['connect']['login_url'];?>&statfrom=login_simple">使用QQ帐号登录</a><?php } } ?>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['global_header_mobile'])) echo $_G['setting']['pluginhooks']['global_header_mobile'];?>
<div class="box">
<a href="./forum.php?mobile=yes" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em> &gt; </em><a href="plugin.php?id=dsu_paulsign:sign&amp;mobile=yes">每日签到</a>
</div>
<div id="ct" class="wp">
<div class="vt">
<div class="bm mtn">
<?php if($qiandaodb['time'] < $tdtime) { ?>
<div class="bm_h">
今天签到了吗？请选择您此刻的心情并写下今天最想说的话！<?php if($var['ftopen']) { ?><br><font color="red">[温馨提示:今日未签到会员将自动跳转到此处,请签到后再返回论坛进行各项操作.]</font><?php } ?>
</div>
<div class="bm_c">
<form name="qiandao" method="post" action="plugin.php?id=dsu_paulsign:sign&amp;operation=qiandao&amp;infloat=0&amp;inajax=0&amp;mobile=yes">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<label for="mind"><strong>签到心情选择</strong></label>
<select name="qdxq"><?php if(is_array($emots)) foreach($emots as $key => $value) { ?><option value="<?php echo $key;?>"><?php echo $value['name'];?></option>
<?php } ?>
</select>
<br>
<?php if(!$var['sayclose']) { ?>
<label for="mode"><strong>今日最想说模式</strong></label>
<label><input type="radio" name="qdmode" value="1" checked="checked" onclick="if(checked == true){document.getElementById('mode1').style.display='';document.getElementById('mode2').style.display='none';}">&nbsp;自己填写</label>&nbsp;&nbsp;
<?php if($var['ksopen']) { ?><label><input type="radio" name="qdmode" value="2" onclick="if(checked == true){document.getElementById('mode1').style.display='none';document.getElementById('mode2').style.display='';}">&nbsp;快速选择</label>&nbsp;&nbsp;<?php } if($var['todaysayxt']) { ?><label><input type="radio" name="qdmode" value="3" onclick="if(checked){document.getElementById('mode1').style.display='none';document.getElementById('mode2').style.display='none';}">&nbsp;不想填写</label><?php } ?>
<div id="mode1" style="display:;">
<label for="zxs"><strong>我今天最想说</strong></label>
<input type="text" name="todaysay" id="todaysay" class="txt" />
<span class="xg2">限制最少3个,最多50个中文字数</span>
</div>
<div id="mode2" style="display:none;">
<label for="fastreply"><strong>快速语句选择</strong></label>
<select name="fastreply"><?php if(is_array($fastreplytexts)) foreach($fastreplytexts as $key => $value) { ?><option value="<?php echo $key;?>" style="color:#<?php echo dechex(rand(0, 255)).dechex(rand(0,196)).dechex(rand(0,255));?>"><?php echo $value;?></option>
<?php } ?>
</select>
</div>
<?php } ?>
<div class="inbox">
<input type="submit" value="点我签到!">
</div>
</form>
</div>
<?php } else { ?>
<div class="bm_h">您今天已经签到过了或者签到时间还未开始</div><br>
<?php } ?>
</div>
<div class="bm">
<div class="bm_h">签到服务台</div>
<div class="bm_c add">
<?php if($qiandaodb) { ?>
<p><font color=#FF0000><b><?php echo $_G['username'];?></b></font> , 您累计已签到: <b><?php echo $qiandaodb['days'];?></b> 天</p>
<p>您本月已累计签到:<b><?php echo $qiandaodb['mdays'];?></b> 天</p>
<p>【<?php echo $q['if'];?>】</p>
<p>您上次签到时间:<font color=#ff00cc><?php echo $qtime;?></font> </p>
<p>您目前获得的总奖励为:<?php echo $_G['setting']['extcredits'][$var['nrcredit']]['title'];?> <font color=#ff00cc><b><?php echo $qiandaodb['reward'];?></b></font> <?php echo $_G['setting']['extcredits'][$var['nrcredit']]['unit'];?> , 上次获得的奖励为:<?php echo $_G['setting']['extcredits'][$var['nrcredit']]['title'];?> <font color=#ff00cc><b><?php echo $qiandaodb['lastreward'];?></b></font> <?php echo $_G['setting']['extcredits'][$var['nrcredit']]['unit'];?>.</p>
<p><?php echo $q['level'];?></p>
<?php } else { ?>
<p>您从未签到过，赶快签到吧!</p>
<?php } ?>
</div>
</div>
</div>
</div></div>
<?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?>
<div class="ft">
<p><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></p>
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em></p>
<p><a href="<?php echo $nav;?>">首页</a><span class="pipe">|</span>标准版<span class="pipe">|</span><a href="<?php echo $_G['setting']['mobile']['simpletypeurl']['2'];?>" class="xw0" title="触屏版">触屏版</a><span class="pipe">|</span><a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>" class="xw0" title="电脑版">电脑版</a></p>
</div>
</body>
</html><?php updatesession();?><?php if(defined('IN_MOBILE')) { output();?><?php } else { output_preview();?><?php } ?>
