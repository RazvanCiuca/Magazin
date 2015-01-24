<?php
    class category  {
    
        function __construct() {
    
        }
    
        function getCategories() {
            $sql = 'SELECT * FROM domenii';
            $result = mysql_query($sql);
    
            $categories = array();
           
    
            while($row = mysql_fetch_array($result)) {
                $categories[]= array("category_id"=>$row['id_domeniu'],
                                     "category_name" => $row['nume_domeniu']);
            }
    
            return $categories;
        }
        
        function getCategory($category_id) {
          $sql = 'SELECT *
                  FROM domenii
                  WHERE id_domeniu='.$category_id;
          $result = mysql_query($sql);
          
          $category_name = mysql_fetch_array($result)['nume_domeniu'];
          
          return $category_name;          
        }
    }