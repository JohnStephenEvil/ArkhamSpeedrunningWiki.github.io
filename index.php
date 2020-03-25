<!doctype html>
<html lang="en">

<?php
	require_once("utility.php");
	require_once("page-dir.php");
	
	$urlFrags = GetURLFrags(@parse_url($_SERVER['REQUEST_URI'])['path']);
	if($urlFrags == null || count($urlFrags) <= 0){
		LoadPage($pageDir[""]);
		return;
	}
	
	//TODO - Can probably make this all work for an arbitrary number of fragments with a recursive function
	$frag0 = $urlFrags[0];
	if($frag0 == "index.php" && count($urlFrags) == 1){
		LoadPage($pageDir[""]);
		return;
	}
	
	if(!array_key_exists($frag0, $pageDir)){
		Load404();
		return;
	}else if(count($urlFrags) == 1){
		if(!is_array($pageDir[$frag0])){
			LoadPage($pageDir[$frag0]);
		}else{
			LoadPage($pageDir[$frag0][""]);
		}
		
		return;
	}
	
	$frag1 = $urlFrags[1];
	if(!array_key_exists($frag1, $pageDir[$frag0])){
		Load404();
		return;
	}else if(count($urlFrags) == 2){
		LoadPage($pageDir[$frag0][$frag1]);
		return;
	}
	
	$frag2 = $urlFrags[2];
	if(!array_key_exists($frag2, $pageDir[$frag0][$frag1])){
		Load404();
		return;
	}else if(count($urlFrags) == 3){
		LoadPage($pageDir[$frag0][$frag1][$frag2]);
		return;
	}
	
	if(count($urlFrags) > 3){
		Load404();
		return;
	}

	function LoadPage($content){
		if(IsEmpty($content) || !file_exists($content)){
			Load404();
			return;
		}
		
		$isMDFile = false;
		if(Contains(".md", $content)){
			$isMDFile = true;
			
		}
		
		echo file_get_contents("head.html");
		
		if(!$isMDFile){
			echo "<body id='body-main' class='dark' onload='SetStyle(LoadStyle());'>";
		}else{
			echo "<body id='body-main' class='dark' onload='SetStyle(LoadStyle()); LoadFileMarkdown(\"" . $content . "\");'>";
		}
		
		echo file_get_contents("title-bar.html");
	
		echo "<div class='container-fluid'>";
		echo "<div class='row'>";
	
		echo file_get_contents("sidebar.html");
		
		if(!$isMDFile){
			echo file_get_contents($content);
		}else{
			echo "<div class='col-md-6 center-block'>";
			echo "<div id='targetDiv'></div>";
			echo "</div>";
			echo "<div class='col-md center-block overflow-hidden'></div>";
		}
	
		echo "</div></div></body>";
	}
	
	function Load404(){
		LoadPage("404.html");
	}
?>
</html>