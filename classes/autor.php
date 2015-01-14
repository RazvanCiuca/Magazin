<?php
    class autor {
 
        function __construct() {
            
        }
        
        function getAutori() {
            $sql = 'SELECT * FROM autori';
            $result = mysql_query($sql);
            
            $arr_autori = array();
            
            while($row = mysql_fetch_array($result))
            {
                $arr_autori[$row['id_autor']] = $row['nume_autor'];
            }   
            
            return $arr_autori;
        }
    }
    
    