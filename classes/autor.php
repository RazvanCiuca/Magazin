<?php
    class autor {
 
        function __construct() {
            
        }
        
        function getAutori() {
            $sql = 'SELECT * FROM autori';
            $result = mysql_query($sql);
            
            $makers = array();
            
            while($row = mysql_fetch_array($result)) {            
                $makers[$row['id_autor']] = $row['nume_autor'];
            }   
            
            return $makers;
        }
        
        function getAutoriNames() {
            $sql = 'SELECT * FROM autori';
            $result = mysql_query($sql);
            
            $makers = array();
            
            while($row = mysql_fetch_array($result)) {
                $makers[]= array("maker_id"=>$row['id_autor'], 
                                     "maker_name" => $row['nume_autor']);
            }
            
            return $makers;
        }
    }
    
    