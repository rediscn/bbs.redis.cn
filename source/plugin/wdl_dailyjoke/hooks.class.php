<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_wdl_dailyjoke {
	function index_top() {
		global $_G;
		
		require_once libfile('function/cache');
		loadcache('plugin');
		//load setting
		$setting = $_G['cache']['plugin']['wdl_dailyjoke'];

		$code = include template('wdl_dailyjoke:default');
		return $code;
	}

}
class plugin_wdl_dailyjoke_forum extends plugin_wdl_dailyjoke {
}