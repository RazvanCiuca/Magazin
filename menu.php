<?php
  echo '<br><br><br><br><br><br><br>';
  
  $autori = new autor();
  $smarty->assign('autori', $autori->getAutoriNames());
  
  $categories = new category();
  $smarty->assign('categories', $categories->getCategories());
  
  