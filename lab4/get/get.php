<?php
switch ($_GET['page']) {
   case 'container':
      include "container.html";
      break;
   case 'articles':
      include "articles.html";
      break;
   default:
      include "landing.html";
}
?>