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
    }