<?php
/**
 * @package     Joomla.Site
 *
 * @copyright   (C) 2024 Victor Freitas Matos
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

$doc = JFactory::getDocument();

$app = Factory::getApplication();
$wa  = $this->getWebAssetManager();  // Get the Web Asset Manager - used to load our CSS and JS files

// Add Favicon from images folder
$doc->addHeadLink(HTMLHelper::_('image', JUri::root() . 'media/templates/site/novo_site_CEFET/images/favicon.ico', '', [], true, 1), 'icon', 'rel', ['type' => 'image/x-icon']);

// Get this template's path
$templatePath = 'templates/' . $this->template;

//Register our web assets (Css/JS) with the Web Asset Manager
//The files are defined in joomla.asset.json!!! If you don't want to use the included CSS or JS, just remove these lines or replace the CSS/JS files with your own code!
$wa->useStyle('template.novo_site_CEFET.mainstyles');
$wa->useScript('template.novo_site_CEFET.scripts');

//Set viewport meta tag for mobile responsiveness -- very important for scaling on mobile devices
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1');

?>

<?php // Everything below here is the actual "template" part of the template. Where we put our HTML code for the layout and such. ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

    <?php // Loads important metadata like the page title and viewport scaling ?>
	<jdoc:include type="metas" />

    <?php // Loads the site's CSS and JS files from web asset manager ?>
	<jdoc:include type="styles" />
	<jdoc:include type="scripts" />

    <!-- Font Rawline-->
    <link
        rel="stylesheet"
        href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css"
    />
    <!-- Font Raleway-->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap"
    />
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    
</head>

<body data-bs-theme="light">
    <h1>TEMPLATE NOVO SITE CEFET</h1>
</body>
</html>