<?php  
  echo '<br><br><br><br><br><br><br>';//must fix
  
  if(!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = new cart();
  }
  
  
  $makers = new maker();
  $smarty->assign('makers', $makers->getAllMakers());
  
  $categories = new category();
  $smarty->assign('categories', $categories->getCategories());
  
  
  