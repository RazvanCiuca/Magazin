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
            $query = 'SELECT * FROM categories';
            $result = mysql_query($query);
    
            $categories = array();
           
    
            while($row = mysql_fetch_array($result)) {
                $categories[]= array("category_id"=>$row['category_id'],
                                     "category_name" => $row['category_name'],
                                     "parent_id" => $row['parent_id']
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
                        "category_id" => $category['category_id'],
                        "category_name" => $category['category_name'],
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
                      FROM categories
                      WHERE category_id='.$category_id;
            $result = mysql_query($query);
            
            $category_name = mysql_fetch_array($result)['category_name'];
            
            return $category_name;          
        }
    }