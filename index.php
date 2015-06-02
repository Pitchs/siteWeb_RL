<!DOCTYPE html>
<html>
	<head>
 
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="title" content="PorteFolio" />
			<meta name="description" content="description de la page" />
  
			<link rel='stylesheet' href='monCSS.css' type='text/css' />

			

 
	<head>
	
	<body>
		<div id="bandeau">	
				<ul id="menu">
					<a class='nav' href="index.php?page=index">Home</a>									
					<a class='nav' href="index.php?page=infoBts">BTS sio</a>
					<a class='nav' href="index.php?page=parcours">Parcours</a>
					<a class='nav' href="index.php?page=cv">CV</a>
					<a class='nav' href="index.php?page=travaux">Travaux et réalisations</a>
					<a class='nav' href="index.php?page=veille">Veille</a>
					<a class='nav' href="index.php?page=contact">Contact</a>
					
				</ul>
		<div id="ligne"></div>		
		</div>
		
		
		
<table class="tabl"><td class="alligner">		
		<div class='container'>
		
		<?php
		
		$page = null;
		
		if(isset($_GET['page']) && !empty($_GET['page'])) 
		{	$page = $_GET['page']; }
		
		
		
		switch($page) {
			case 'index': include('pages/textIndex.php');
			break;
			case 'infoBts': include('pages/infoBts.php');
			break;
			case 'parcours': include('pages/parcours.php');
			break;
			case 'cv': include('pages/cv.php');
			break;
			case 'travaux': include('pages/travaux.php');
			break;
			case 'veille': include('pages/veille.php');;
			break;
			case 'contact': include('pages/contact.php');
			break; 
			default : include('pages/textIndex.php');
			break;
		}
     

?>
		</div>
	</td>
	<td >
		<div class="contRss">
<fieldset class="rsslib">
<?php
	require_once("rsslib.php");
	$url = "http://www.scriptol.com/rss.xml";
	echo RSS_Display($url, 15, false, true);
?>
</fieldset>



		
		</div>
	</td>
	</body>
	
	<footer>
			<!-- Placez ici le contenu du pied de page -->
	</footer>
 
</html>