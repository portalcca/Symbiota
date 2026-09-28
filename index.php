<?php
include_once('config/symbini.php');
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load('templates/index');

header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">

	<div>
	<div id="quicksearchdiv" style="width:375px">
					<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
					<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
							<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
							<input id="taxa" type="text" name="taxon" />
							<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms" ><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
					</form>
				</div>
			
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
			<h1 class="headline">¡Bienvenidos!</h1>
				
				<p>Esta plataforma fue generada como parte del proyecto <a href="https://www.gbif.org/project/BID-REG2025-081/increasing-open-biodiversity-information-in-central-america-through-digitized-collections" target="_blank"><i>Incrementando la información abierta de biodiversidad en Centroamérica a través de colecciones digitalizadas</i></a>, del programa de <a href="https://www.gbif.org/news/4uU4o1vqXN95wBTnHS5ZTl/2025-bid-call-for-proposals-regional-and-cross-regional-biodiversity-data-mobilization-projects-closed" target="_blank">Información de Biodiversidad para el Desarrollo</a> de la Instalación Global de Información de Biodiversidad -GBIF- y la Unión Europea. </p>
				
			<p>Diseñado para el uso de instituciones locales, este portal <a href="https://symbiota.org" target="_blank">Symbiota</a>, es un recurso colaborativo para la digitalización y movilización de colecciones de biodiversidad de la región centroamericana. Además, herramientas interactivas permiten la elaboración de mapas, listados de especies y claves de identificación, así como la movilización de información a <a href="https://gbif.org" target="_blank">GBIF</a>. </p> 
				
			<p> Para más información o integrar sus colecciones, pueden visitar nuestra <a href="https://portalcca.github.io" target="_blank">página de documentación</a> o contactar a los administradores en <a href="mailto:portalcentroamerica@gmail.com">portalcentroamerica@gmail.com</a>. </p>
						
			</div>
			<?php
		}
		
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome!</h1>
			<p>This platform was generated as part of the project <a href="https://www.gbif.org/project/BID-REG2025-081/increasing-open-biodiversity-information-in-central-america-through-digitized-collections" target="_blank"><i>Increasing open biodiversity information in Central America through digitized collections</i></a>, for the <a href="https://www.gbif.org/news/4uU4o1vqXN95wBTnHS5ZTl/2025-bid-call-for-proposals-regional-and-cross-regional-biodiversity-data-mobilization-projects-closed" target="_blank">Biodiversity Information for Development -BID-</a> program by the Global Biodiversity Information Facility -GBIF- and the European Union. </p>
				
			<p>Designed for the use of local institutions, this <a href="https://symbiota.org" target="_blank">Symbiota-based</a> portal is a collaborative resource for the digitization and mobilization of biodiversity collections in the Central American region. Additionally, interactive tools allow the generation of maps, species checklists, taxonomic keys, and data mobilization to <a href="https://gbif.org" target="_blank">GBIF</a>. </p> 
				
			<p>For more information or incorporating your collections, please visit our <a href="https://portalcca.github.io" target="_blank">documentation site</a> or contact the portal admins at <a href="mailto:portalcentroamerica@gmail.com">portalcentroamerica@gmail.com</a>. </p>
			</div>
			<?php
		}
		?>

		<div style="max-width:100%;text-align:center;margin:3rem;height:auto">
			<img src="<?php echo $CLIENT_ROOT . '/images/layout/abejaBID.png' ?>" alt="Euglossa" style="max-width:100%"></img>
			
		</div>
		
	</main>
	<?php if(!empty($GLOBALS['DONATE_LINK']) && file_exists($SERVER_ROOT . '/includes/donationButton.php')): ?>
		<?php include($SERVER_ROOT . '/includes/donationButton.php') ?>
	<?php endif ?>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
