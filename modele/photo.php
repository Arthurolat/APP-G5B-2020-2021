<?php 
class Photo{
	public static function saveImage($typeImage,$from,$to){
		if ($typeImage=="capteur"){
			$path="../images/";
		}
		else $path="../images/photos_membres/";
		$path.=Photo::name($to['name']);
		move_uploaded_file($from, $path);
	}
	public static function name($image) {
		return str_replace(" ", "_",$image);
	}

}