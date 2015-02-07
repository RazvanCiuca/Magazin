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
            $query = "SELECT id_carte, titlu, nume_autor, pret, autori.id_autor AS id_autor
                    FROM carti, autori
                    WHERE carti.id_autor=autori.id_autor AND id_domeniu=".$category_id;
            $result = mysql_query($query);
        
            $items = array();
             
            while($row = mysql_fetch_array($result)) {
                $items[]= array("item_id"=>$row['id_carte'],
                                "item_name" => $row['titlu'],
                                "maker_name" => $row['nume_autor'],
                                "maker_id" => $row['id_autor'],
                                "price" => $row['pret']
                               );
            }
        
            return $items;
        }
        
        function getItemsByMaker($maker_id) {
            $query = "SELECT id_carte, titlu, nume_autor, pret, autori.id_autor AS id_autor
                    FROM carti, autori
                    WHERE carti.id_autor=autori.id_autor AND autori.id_autor=".$maker_id;
            $result = mysql_query($query);
        
            $items = array();
             
            while($row = mysql_fetch_array($result)) {
                $items[]= array("item_id"=>$row['id_carte'],
                                "item_name" => $row['titlu'],
                                "maker_name" => $row['nume_autor'],
                                "maker_id" => $row['id_autor'],
                                "price" => $row['pret']
                               );
            }
        
            return $items;
        }
        
        function getItem($item_id) {
          $query = "SELECT titlu, nume_autor, descriere, pret, autori.id_autor AS id_autor, id_carte
                  FROM carti,autori 
                  WHERE id_carte=".$item_id." AND carti.id_autor=autori.id_autor";
          $result = mysql_query($query);
          
          $row = mysql_fetch_array($result);
          
          $item = array("item_name" => $row['titlu'],
                        "maker_name" => $row['nume_autor'],
                        "maker_id" => $row['id_autor'],
                        "price" => $row['pret'],
                        "description" => $row['descriere'],
                        "item_id" => $row['id_carte']
                       );
          
          return $item;
        }
        
        function getItemReviews($item_id) {
          $query = "SELECT * 
                  FROM comentarii 
                  WHERE id_carte=".$item_id;
          $result = mysql_query($query);
          
          $reviews = array();
          
          while($row = mysql_fetch_array($result)) {
              $reviews[]= array("user_name" => $row['nume_utilizator'],
                                "review" => $row['comentariu']                               
                               );
          }
          
          return $reviews;
        }
    
        function getNewestItems() {
            $query = "SELECT id_carte, titlu, nume_autor, pret, autori.id_autor AS id_autor
                    FROM carti, autori 
                    WHERE carti.id_autor=autori.id_autor 
                    ORDER BY data 
                    DESC LIMIT 0,3";
            $result = mysql_query($query);
    
            $newest_items = array();             
           
            while($row = mysql_fetch_array($result)) {
                $newest_items[]= array("item_id"=>$row['id_carte'],
                                        "item_name" => $row['titlu'],
                                        "maker_name" => $row['nume_autor'],
                                        "maker_id" => $row['id_autor'],
                                        "price" => $row['pret']
                                      );
            }
    
            return $newest_items;
        }
        
        function getPopularItems() {
            $query = "SELECT id_carte, SUM(nr_buc) AS bucatiVandute
                    FROM vanzari
                    GROUP BY id_carte
                    ORDER BY bucatiVandute
                    DESC LIMIT 0,3";
            $result = mysql_query($query);
            
            $popular_ids = array();                        
            
            while($row = mysql_fetch_array($result)) {
                $popular_ids[] = $row['id_carte'];              
            }
          
            $query = "SELECT carti.id_carte AS id_carte, titlu, nume_autor, pret, autori.id_autor AS id_autor
                    FROM carti 
                        LEFT JOIN autori ON carti.id_autor=autori.id_autor
                    WHERE carti.id_carte IN (".implode(",", $popular_ids).")";
                   
            $result = mysql_query($query) or die($query);
 
            $popular_items = array();
             
            while($row = mysql_fetch_array($result)) {
                $popular_items[]= array("item_id"=>$row['id_carte'],
                                        "item_name" => $row['titlu'],
                                        "maker_name" => $row['nume_autor'],
                                        "maker_id" => $row['id_autor'],
                                        "price" => $row['pret']
                );
            }
        
            return $popular_items;
        }
    }