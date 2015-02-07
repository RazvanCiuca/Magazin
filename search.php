<?php
    require_once('top.php');    
    
    $arr_keywords = explode(' ', $_POST['keywords']);
    
    $keywords = array();
    
    foreach($arr_keywords as $keyword) {
      $keywords[] = '+'.$keyword.'*';
    }
   
    $keywords = implode(' ', $keywords);
    
    $query = "SELECT * 
              FROM carti LEFT JOIN autori ON carti.id_autor=autori.id_autor
              WHERE MATCH (titlu, nume_autor, descriere) AGAINST ('".$keywords."' IN BOOLEAN MODE)";
    
    $result = mysql_query($query);  
    
    $search_results = array();
    
    while($row = mysql_fetch_array($result)) {
      
        $search_results[]= array("maker_id"=>$row['id_autor'],
            "item_name" => $row['titlu'],
          "item_id" => $row['id_carte'],
          "price" => $row['pret'],
          "maker_name" => $row['nume_autor']
        );
    }    
    
    
    $smarty->assign('search_results', $search_results);
    $smarty->display('search.tpl');