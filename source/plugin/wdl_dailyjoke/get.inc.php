<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

global $_G;
require_once libfile('function/cache');
//load setting
loadcache('plugin');
$setting = $_G['cache']['plugin']['wdl_dailyjoke'];
$cache_file = DISCUZ_ROOT.'./data/sysdata/cache_wdl_dailyjoke.php';
if(dgmdate($_G['timestamp'],'d') != dgmdate(@filemtime($cache_file), 'd')) {
    $contect = dfsockopen("http://www.weiduola.cn/api/joke.php?mod=get");
    $contect= addcslashes($contect,"'");    
    if($contect){
        $contect = base64_encode($contect);
        $cache_content = "\$wdl_dailyjoke='".$contect."';\n";
        writetocache('wdl_dailyjoke', $cache_content);
    }else{
        @include_once DISCUZ_ROOT.'./data/sysdata/cache_wdl_dailyjoke.php';
    }
}else{
    @include_once DISCUZ_ROOT.'./data/sysdata/cache_wdl_dailyjoke.php';
}
if($wdl_dailyjoke){
    $wdl_dailyjoke = base64_decode($wdl_dailyjoke);
    $wdl_dailyjoke = json_decode($wdl_dailyjoke , true);
    $wdl_dailyjoke = dhtmlspecialchars($wdl_dailyjoke);
    if($_G['charset'] == 'gbk'){
        $wdl_dailyjoke['title'] = iconv("utf-8","gb2312//IGNORE",$wdl_dailyjoke['title']);
        $wdl_dailyjoke['text'] = iconv("utf-8","gb2312//IGNORE",$wdl_dailyjoke['text']);
    }elseif($_G['charset'] == 'big5'){
        $wdl_dailyjoke['title'] = iconv("utf-8","big5//TRANSLIT//IGNORE",$wdl_dailyjoke['title']);
        $wdl_dailyjoke['text'] = iconv("utf-8","big5//TRANSLIT//IGNORE",$wdl_dailyjoke['text']);
    }
    include template('common/header_ajax');
    
    echo '    	<span class="z cl wdl_common_img"><img src="'.$_G['siteurl'].'/source/plugin/wdl_dailyjoke/icon.jpg" width="48" height="48" /></span>
    	<span class="xs2"><strong>'.$wdl_dailyjoke['title'].'</strong></span><br />
        <span class="xs2">'.$wdl_dailyjoke['text'].'</span><br />
        <span class="xg1"></span>';
    include template('common/footer_ajax');
}
//$code = include template('wdl_dailyjoke:default');
//return $code;