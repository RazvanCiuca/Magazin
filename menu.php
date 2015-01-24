<?php
  echo '<br><br><br><br><br><br><br>';//must fix
  
  $makers = new autor();
  $smarty->assign('makers', $makers->getAutoriNames());
  
  $categories = new category();
  $smarty->assign('categories', $categories->getCategories());
  
  
  