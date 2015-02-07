<?php  
  //echo '<br><br><br><br><br><br><br>';//must fix  
  
  
  $makers = new maker();
  $smarty->assign('makers', $makers->getAllMakers());
  
  $categories = new category();
  $smarty->assign('categories', $categories->getCategories());
  
  
  