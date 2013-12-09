<?php

//
// PHASE: BOOTSTRAP
//

define('PERSIA_INSTALL_PATH', dirname(__FILE__));
define('PERSIA_SITE_PATH', PERSIA_INSTALL_PATH . '/site');

require(PERSIA_INSTALL_PATH.'/src/bootstrap.php');

$pe = CPersia::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//

$pe->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//

$pe->ThemeEngineRender();
