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
		<h1 class="page-heading"><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></h1>
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos al Portal de Colecciones de Centroamérica</h1>
				<p>Esta plataforma está diseñada como un recurso colaborativo para la digitalización y movilización de colecciones de biodiversidad de la región Centroamericana. Además, el portal facilita el uso de herramientas interactivas para la generación de mapas, listados de especies y claves de identificación. La información también puede ser movilizada a la Instalación Global de Información de Biodiversidad -GBIF-, desde donde puede alimentar a otros agregadores de información locales e internacionales. Los datos añadidos al portal están disponibles para ser utilizados por investigadores, estudiantes y público en general, por lo que se insta a citar adecuadamente su origen. 			
Para más información o integrar sus colecciones, pueden escribir a portalcentroamerica@gmail.com.</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue</h1>
				<p>Ce portail de données a été créé pour promouvoir la collaboration... Remplacer par le texte d'introduction en anglais</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome</h1>
				<p>
					This data portal has been established to promote collaborative... Replace
					with introductory text in English. If the portal is not meant to be
					multilingual, remove the unneeded language sections
				</p>
			</div>
			<?php
		}
		?>
	</main>
	<?php if(!empty($GLOBALS['DONATE_LINK']) && file_exists($SERVER_ROOT . '/includes/donationButton.php')): ?>
		<?php include($SERVER_ROOT . '/includes/donationButton.php') ?>
	<?php endif ?>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
