<?php
    class maker {
 
        function __construct() {
            
        }
        
        function getMakerById($maker_id) {            
            $sql = 'SELECT *
                    FROM autori
                    WHERE id_autor='.$maker_id;
            $result = mysql_query($sql);
            
            $maker_name = mysql_fetch_array($result)['nume_autor'];
            
            return $maker_name;         
        }
          
        
//         function getMakers() {
//             $sql = 'SELECT * FROM autori';
//             $result = mysql_query($sql);
            
//             $makers = array();
            
//             while($row = mysql_fetch_array($result)) {            
//                 $makers[$row['id_autor']] = $row['nume_autor'];
//             }   
            
//             return $makers;
//         }
        
        function getAllMakers() {
            $sql = 'SELECT * FROM autori';
            $result = mysql_query($sql);
            
            $makers = array();
            
            while($row = mysql_fetch_array($result)) {
                $makers[]= array("maker_id"=>$row['id_autor'], 
                                 "maker_name" => $row['nume_autor']
                                );
            }
            
            return $makers;
        }
    }
    
    