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
                    FROM makers
                    WHERE maker_id='.$maker_id;
            $result = mysql_query($query);
            
            $maker_name = mysql_fetch_array($result)['maker_name'];
            
            return $maker_name;         
        }
          
        
        function getAllMakers() {
            $query = 'SELECT * FROM makers';
            $result = mysql_query($query);
            
            $makers = array();
            
            while($row = mysql_fetch_array($result)) {
              
                $makers[]= array("maker_id"=>$row['maker_id'], 
                                 "maker_name" => $row['maker_name']
                                );
            }
            
            $this->makers = $makers;
        }
    }
    
    