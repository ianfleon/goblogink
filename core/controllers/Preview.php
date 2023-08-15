<?php

class Preview extends App {
	
	public function www($datas = null) {
		if ($datas != null) {
			include_once(DIR_ROOT.'/dist/themes/'.uwu('THEME').'/post.php');
		} else {
			include_once(DIR_ROOT.'/dist/themes/'.uwu('THEME').'/index.php');
		}
	}

}