<?php

class Util {

	public static function message($string) {
		$json = json_decode(file_get_contents(public_path() . '/message.json'));
		return $json->$string;
	}

	public static function toView($value) {
		return date('d/m/Y', strtotime($value));
	}

	public static function toMySQL($value) {
		$date = explode('/', $value);
		return $date[2] . '-' . $date[1] . '-' . $date[0];
	}

	public static function truncate($string) {
		return current(explode('\n', wordwrap($string, 70, ' ...\n')));
	}

}