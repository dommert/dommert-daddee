<?PHP
// Dommert Enterprises Inc
// (c) 2014

//----------------------------------
// beta templates

// Demo Template One column

// ------- Load Globals & Page Info
$page['title'] = "Test Page";
$page['parent'] = "1";
$theme = "default"; //Required Theme (folder)
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  //$config = __DIR__ . '/globals.php';
  REQUIRE_ONCE($config); // Load Configs & Libraries
// Check Login Routine
//------------------------------

// -------- Content Section
$head = $themes.'/head.php'; 
$header = $themes.'/header.php';
$nav = $content.'/nav_main.php';
$middle = $content.'/page/test.middle.php';
$footer = $themes.'/footer.php';
//--------------------------------

// ** Load the Template ** 
include $themes.'/main.php'; // Main Template

?>





