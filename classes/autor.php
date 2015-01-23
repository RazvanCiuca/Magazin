<?php
    class autor {
 
        function __construct() {
            
        }
        
        function getAutori() {
            $sql = 'SELECT * FROM autori';
            $result = mysql_query($sql);
            
            $arr_autori = array();
            
            while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {            
                $arr_autori[$row['id_autor']] = $row['nume_autor'];
//                 echo $arr_autori['id_autor'].'    '.$arr_autori['nume_autor'].'<br>';
            }   
            
            return $arr_autori;
        }
        
        function getAutoriNames() {
            $sql = 'SELECT * FROM autori';
            $result = mysql_query($sql);
            
            $arr_autori = array();
            //$i=0;
            
            while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
                $arr_autori[]= array("id_autor"=>$row['id_autor'], 
                                     "nume_autor" => $row['nume_autor']);
            }
            
            return $arr_autori;
        }
    }
    
    