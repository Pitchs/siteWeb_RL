<!DOCTYPE html>
<html>
	<head>
 
			<meta http-equiv="Content-Type" content="text/html;CHARSET=utf-8" />
			<meta name="title" content="PorteFolio" />
			<meta name="description" content="description de la page" />
			<link rel='stylesheet' href='css/monCss.css' type='text/css' />	
			<meta name="keywords" content="Romain Ledru,romain ledru,dévellopeurs nantes,romain ledru porte folio/">
			<title>Site personel Romain Ledru</title>
			
			<script type="text/javascript">
				PDF.SetShowToolBar("true"); //--- barre d'outils true(visible) false(non visible) ---//
				PDF.SetShowScrollbar("true"); //--- barre de scroll true(visible) false(non visible) ---//
				PDF.SetPageMode("none"); //--- cache les signets ---//
				PDF.setZoom(80%); //--- Zoom le document à 80% ---//
			</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  });
  </script>
			

	<head>
	
	<body>
		<div id="bandeau">	
				<ul id="menu">
					<a class='nav' href="index.php?page=index">Home</a>									
					<a class='nav' href="index.php?page=infoBts">BTS sio</a>
					<a class='nav' href="index.php?page=cv">CV</a>
					<a class='nav' href="index.php?page=travaux">Travaux et réalisations</a>
					<a class='nav' href="index.php?page=veille">Veille</a>
					<a class='nav' href="index.php?page=contact">Contact</a>
					
				</ul>
		<div id="ligne"></div>		
		</div>
		
		
				
	<table class="tabl">
		<td class="pGauche">		
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
		<td class="pDroite">
			<div class="contRss">
			
			<?php
				$cachename = "rss-cache-tmp.php";
				$url = "http://www.scriptol.fr/rss.xml"; 
				if(file_exists($cachename))
				{
					  $now = date("G");
					  $time = date("G", filemtime($cachename));
					  if($time == $now)
				  {
					 include($cachename);
					 exit();
				  }
				}
			require_once("rsslib.php");
			$cache = RSS_Display($url, 7, false, true);
			file_put_contents($cachename, $cache);
			echo $cache;
			?>
			
			</div>
		</td>
	</body> 
</html>