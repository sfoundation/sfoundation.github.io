<?php

include("include/header.html");
$curr = "pages/index.html";
if (isset($_GET['page']))
{
	$txt = $_GET['page'];
	$addr = "pages/".$txt.".html" ;
	if(file_exists($addr)){
		$curr = $addr;
	}
}
include($curr);
include("include/footer.html");

?>
