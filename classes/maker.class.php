<?php
    class maker {
      
        public $makers = array();
 
        function __construct() {
            $this->getAllMakers();
        }
        
        function idFromName($maker_name) {
          
            foreach ($this->makers as $maker) {
                if ($maker['maker_name'] == $maker_name)
                    return $maker['maker_id'];
            }
        }
        
        function getMakerById($maker_id) {            
            $query = 'SELECT *
                    FROM autori
                    WHERE id_autor='.$maker_id;
            $result = mysql_query($query);
            
            $maker_name = mysql_fetch_array($result)['nume_autor'];
            
            return $maker_name;         
        }
          
        
        function getAllMakers() {
            $query = 'SELECT * FROM autori';
            $result = mysql_query($query);
            
            $makers = array();
            
            while($row = mysql_fetch_array($result)) {
              
                $makers[]= array("maker_id"=>$row['id_autor'], 
                                 "maker_name" => $row['nume_autor']
                                );
            }
            
            $this->makers = $makers;
        }
    }
    
    