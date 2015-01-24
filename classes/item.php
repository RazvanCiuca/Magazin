<?php
    class item  {
    
        function __construct() {
    
        }
    
        function getNewestItems() {
            $sql = "SELECT id_carte, titlu, nume_autor, pret, autori.id_autor AS id_autor
                    FROM carti, autori 
                    WHERE carti.id_autor=autori.id_autor 
                    ORDER BY data 
                    DESC LIMIT 0,3";
            $result = mysql_query($sql);
    
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
            $sql = "SELECT carti.id_carte AS id_carte, titlu, nume_autor, pret, autori.id_autor AS id_autor
                    FROM carti, autori, (
                                         SELECT id_carte, sum(nr_buc) AS bucatiVandute
                                         FROM vanzari
                                         GROUP BY id_carte
                                         ORDER BY bucatiVandute
                                         DESC LIMIT 0,3
                                        ) AS populare
                    WHERE carti.id_carte = populare.id_carte
                    GROUP BY id_carte
                    ORDER BY populare.bucatiVandute
                    DESC";
                   
            $result = mysql_query($sql);
 
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