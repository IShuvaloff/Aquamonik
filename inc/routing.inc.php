<?php
  switch($page) {
    case null:
      include check_file('./inc/company.inc.php');
      break;
    case 'valves':
    case 'airing':
    case 'columns':
    case 'deferrum':
    case 'carbon':
    case 'soft':
    case 'osmos':
      include check_file('./inc/equipment-items.inc.php');
      break;
    default:
      include check_file('./inc/' . $page . '.inc.php');
  }
?>