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
				
				<p>Con el objetivo de incrementar el acceso a información de biodiversidad para investigaciones científicas, el Portal de Colecciones Centroamericanas está diseñado como un recurso colaborativo para la digitalización y movilización de colecciones de biodiversidad de la región. El portal, generado con <a href="https://symbiota.org" target="_blank">Symbiota</a>, también facilita el uso de herramientas interactivas para la elaboración de mapas, listados de especies y claves de identificación para la biota local. Adicionalmente, la información puede ser movilizada a la <a href="https://gbif.org" target="_blank">Instalación Global de Información de Biodiversidad -GBIF-</a>, desde donde puede alimentar otros agregadores locales e internacionales. </p> 
				
			<p>El uso del portal está disponible para colecciones locales que deseen digitalizar y hacer accesibles sus especímenes de la región Centroamericana. Las instituciones guatemaltecas pueden ingresar sus colecciones en el <a href="https://biodiversidad.gt" target="_blank">Portal de Biodiversidad de Guatemala</a> y movilizarlos hacia este portal o a GBIF. Los datos añadidos al portal están disponibles para ser utilizados por investigadores, estudiantes y público en general, por lo que se insta a citar adecuadamente su origen.</p>
				
				<p>Esta plataforma fue generada como parte del proyecto <a href="https://www.gbif.org/project/BID-REG2025-081/increasing-open-biodiversity-information-in-central-america-through-digitized-collections" target="_blank"><i>Incrementando la información abierta de biodiversidad en Centroamérica a través de colecciones digitalizadas</i></a>, del programa de <a href="https://www.gbif.org/news/4uU4o1vqXN95wBTnHS5ZTl/2025-bid-call-for-proposals-regional-and-cross-regional-biodiversity-data-mobilization-projects-closed" target="_blank">Información de Biodiversidad para el Desarrollo</a> de GBIF y la Unión Europea. </p> 
				
				<p> Para más información o integrar sus colecciones, pueden visitar nuestra <a href="https://portalcca.github.io" target="_blank">página de documentación</a> o contactar a los administradores en <a href="mailto:portalcentroamerica@gmail.com">portalcentroamerica@gmail.com</a>. </p>
			</div>
			<?php
		}
		
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome!</h1>
			<p>With the objective of increasing access to biodiversity information for research, the Central American Collections portal is designed as a collaborative resource for the digitization and mobilization of biodiversity collections in the region. This <a href="https://symbiota.org" target="_blank">Symbiota-based portal</a> also facilitates the use of interactive tools for generating maps, species lists, and identification keys. Additionally, the information can be mobilized to the <a href="https://gbif.org" target="_blank">Global Biodiversity Information Facility -GBIF-</a>, from where it can be harvested by other local and international data aggregators. </p> 
				
			<p>The use of this portal is available for local collections that are looking to digitize and share their Central American specimens data. Guatemalan institution can integrate their collection in the <a href="https://biodiversidad.gt" target="_blank">Guatemala Biodiversity Portal</a> and mobilize them to this platform or to GBIF. Data added in this portal are available for researcheres, students, and general public,  Los datos añadidos al portal están disponibles para ser utilizados por investigadores, estudiantes y público en general, por lo que se insta a citar adecuadamente su origen.</p>
			
				<p>This platform was generated for the project <a href="https://www.gbif.org/project/BID-REG2025-081/increasing-open-biodiversity-information-in-central-america-through-digitized-collections" target="_blank"><i>Increasing open biodiversity information in Central America through digitized collections</i></a>, funded by the <a href="https://www.gbif.org/news/4uU4o1vqXN95wBTnHS5ZTl/2025-bid-call-for-proposals-regional-and-cross-regional-biodiversity-data-mobilization-projects-closed" target="_blank">Biodiversity Information for Development</a> program by GBIF and the European Union. </p> 
							
				<p> For more information or to add a collection, you can visit our <a href="https://portalcca.github.io" target="_blank">documentation site</a> or contact the portal administrators at <a href="mailto:portalcentroamerica@gmail.com">portalcentroamerica@gmail.com</a>. </p>

				</p>
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
