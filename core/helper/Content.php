<?php

class Content {

	public static function all()
	{

		$db = new SQLite3(DIR_ROOT.'/uwu.db');
		
		if (!$db) {
			echo "Gagal terhubung..";
		}

		$result = $db->query('SELECT * FROM content_tb');
		
		// var_dump($result->fetchArray());

		$data = [
			[
			'judul' => 'Belajar membuat blog dengan CMSUWU',
			'isi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak'],
			[
			'judul' => 'Cara membuat kue kering',
			'isi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak']
		];

		return $data;
	}

	public static function current()
	{
		// var_dump($_SESSION);
		return self::all()[0];
	}

}