<?php

$page = $_GET['page'];

switch ($page) {
  case 'dashboard':
    // open the dashboard page
    require 'views/templates/dashboard.php';
    break;

    case 'issues':
      // open the issues page
      require 'views/templates/issues.php';
      break;

      case '404':
        // open the issues page
        require 'views/templates/404.php';
        break;

  default:
    // Set the Default
      require 'views/templates/dashboard.php';
      
    break;
}
