<?php
    class category {
      
        public $categories = array();
        public $parents = array();
    
        function __construct() {
            $this->getCategories();
        }
        
        function idFromName($category_name) {
          
            foreach ($this->categories as $category) {
                if ($category['category_name'] == $category_name) 
                    return $category['category_id'];
            }    
        }
    
        function getCategories() {
            $query = 'SELECT * FROM domenii';
            $result = mysql_query($query);
    
            $categories = array();
           
    
            while($row = mysql_fetch_array($result)) {
                $categories[]= array("category_id"=>$row['id_domeniu'],
                                     "category_name" => $row['nume_domeniu']//,
                                   //  "parent_id" => $row['parent_id']
                );
            }
            
            $this->categories = $categories;
            
            return $categories;
        }
        
        function findParents($category_id) {
            if($category_id == 0) 
              return $this->parents;
          
            foreach ($this->categories as $category) {
                if ($category['category_id'] == $category_id) {                   
                  
                    $this->parents[] = array(
                        "category_id" => $category['id_domeniu'],
                        "category_name" => $category['nume_domeniu'],
                        "parent_id" => $category['parent_id']
                    );
                   
                    $this->findParents($category['parent_id']);
                    break;
                }
            }
                  
          
        }
        
        function getCategory($category_id) {
           if(!is_numeric($category_id))
             return false;
          
            $query = 'SELECT *
                  FROM domenii
                  WHERE id_domeniu='.$category_id;
            $result = mysql_query($query);
            
            $category_name = mysql_fetch_array($result)['nume_domeniu'];
            
            return $category_name;          
        }
    }