<?php
    class item  {
      
        public $items = array();
    
        function __construct() {
            
        }
        
        function idFromName($category_name) {
        
            foreach ($this->categories as $category) {
                if ($category['category_name'] == $category_name)
                    return $category['category_id'];
            }
        }
        
        function getItemsByCategory($category_id) {
            $query = "SELECT item_id, item_name, maker_name, price, makers.maker_id AS maker_id
                    FROM items, makers
                    WHERE items.maker_id=makers.maker_id AND category_id=".$category_id;
            $result = mysql_query($query);
        
            $items = array();
             
            while($row = mysql_fetch_array($result)) {
                $items[]= array("item_id"=>$row['item_id'],
                                "item_name" => $row['item_name'],
                                "maker_name" => $row['maker_name'],
                                "maker_id" => $row['maker_id'],
                                "price" => $row['price']
                               );
            }
        
            return $items;
        }
        
        function getItemsByMaker($maker_id) {
            $query = "SELECT item_id, item_name, maker_name, price, makers.maker_id AS maker_id
                    FROM items, makers
                    WHERE items.maker_id=makers.maker_id AND makers.maker_id=".$maker_id;
            $result = mysql_query($query);
        
            $items = array();
             
            while($row = mysql_fetch_array($result)) {
                $items[]= array("item_id"=>$row['item_id'],
                                "item_name" => $row['item_name'],
                                "maker_name" => $row['maker_name'],
                                "maker_id" => $row['maker_id'],
                                "price" => $row['price']
                               );
            }
        
            return $items;
        }
        
        function getItem($item_id) {
          $query = "SELECT item_name, maker_name, description, price, makers.maker_id AS maker_id, item_id
                  FROM items, makers
                  WHERE item_id=".$item_id." AND items.maker_id=makers.maker_id";
          $result = mysql_query($query);
          
          $row = mysql_fetch_array($result);
          
          $item = array("item_name" => $row['item_name'],
                        "maker_name" => $row['maker_name'],
                        "maker_id" => $row['maker_id'],
                        "price" => $row['price'],
                        "description" => $row['description'],
                        "item_id" => $row['item_id']
                       );
          
          return $item;
        }
        
        function getItemReviews($item_id) {
          $query = "SELECT * 
                  FROM reviews 
                  WHERE item_id=".$item_id;
          $result = mysql_query($query);
          
          $reviews = array();
          
          while($row = mysql_fetch_array($result)) {
              $reviews[]= array("user_name" => $row['user_name'],
                                "review" => $row['review_text']                               
                               );
          }
          
          return $reviews;
        }
    
        function getNewestItems() {
            $query = "SELECT item_id, item_name, maker_name, price, makers.maker_id AS maker_id
                    FROM items, makers 
                    WHERE items.maker_id=makers.maker_id 
                    ORDER BY date_added 
                    DESC LIMIT 0,3";
            $result = mysql_query($query);
    
            $newest_items = array();             
           
            while($row = mysql_fetch_array($result)) {
                $newest_items[]= array("item_id"=>$row['item_id'],
                                       "item_name" => $row['item_name'],
                                       "maker_name" => $row['maker_name'],
                                       "maker_id" => $row['maker_id'],
                                       "price" => $row['price']
                                      );
            }
    
            return $newest_items;
        }
        
        function getPopularItems() {
            $query = "SELECT item_id, SUM(qty) AS qtySold
                    FROM sales
                    GROUP BY item_id
                    ORDER BY qtySold
                    DESC LIMIT 0,3";
            $result = mysql_query($query);
            
            $popular_ids = array();                        
            
            while($row = mysql_fetch_array($result)) {
                $popular_ids[] = $row['item_id'];              
            }
          
            $query = "SELECT items.item_id AS item_id, item_name, maker_name, price, makers.maker_id AS maker_id
                    FROM items 
                        LEFT JOIN makers ON items.maker_id=makers.maker_id
                    WHERE items.item_id IN (".implode(",", $popular_ids).")";
                   
            $result = mysql_query($query) or die($query);
 
            $popular_items = array();
             
            while($row = mysql_fetch_array($result)) {
                $popular_items[]= array("item_id"=>$row['item_id'],
                                        "item_name" => $row['item_name'],
                                        "maker_name" => $row['maker_name'],
                                        "maker_id" => $row['maker_id'],
                                        "price" => $row['price']
                );
            }
        
            return $popular_items;
        }
    }