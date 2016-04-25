<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page="home";
}
switch($page){
	case "home":
		$title="Halaman Utama Makanan dan Minuman";
		include("header.php");
		include("menu.php");
		include("halaman/home.php");
		include("footer.php");
	break;
	case "gallery":
		$title="Hubungi Kami";
		include("header.php");
		include("menu.php");
		include("halaman/gallery.php");
		include("footer.php");
	break;
	case "about-me":
		$title="About Me";
		include("header.php");
		include("menu.php");
		include("halaman/about-me.php");
		include("footer.php");
	
}
?>