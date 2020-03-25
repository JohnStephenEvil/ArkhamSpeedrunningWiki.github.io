<?php
	function IsEmpty($var){
		return $var == '';
	}

	function IsNotEmpty($var){
		return !IsEmpty($var);
	}
	
	function Contains($needle, $haystack, $caseSensitive = false){
		if($caseSensitive){
			return strpos($haystack, $needle) !== false;
		}else{
			return strpos(strtolower($haystack), strtolower($needle)) !== false;
		}
	}

	function GetURLFrags($url){
		$newUrl = explode('/', strtolower($url));
		
		foreach($newUrl as $url){
			$url = str_replace('/', '', $url);
		}
		
		return array_values(array_filter($newUrl, "IsNotEmpty"));
	}
?>