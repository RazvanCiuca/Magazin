<?php
    class cart {
    
        function cart() {
          
          if(!isset($_SESSION['cart_contents'])) {
            $_SESSION['cart_contents'] = array();
          }
    
        }
        
        function getCartContents() {
          
          $cart_contents = array();
    
          foreach($_SESSION["cart_contents"] as $id=>$details)
          {
              $cart_contents[] = array('item_id'=>$id, 'item_name'=>$details['item_name'], 'qty'=>$details['qty'], 'price'=>$details['price']);
          }
          
          return $cart_contents;
        }
        
        function addItem($item_id, $qty, $price, $item_name) {
          
          if(array_key_exists($item_id, $_SESSION['cart_contents'])) {
            
            $_SESSION["cart_contents"][$item_id]["qty"] += $qty;
            
          }
          else {
            
            $_SESSION["cart_contents"][$item_id]["qty"] = $qty;
            $_SESSION["cart_contents"][$item_id]["price"] = $price;
            $_SESSION["cart_contents"][$item_id]["item_name"] = $item_name;
            
          }
          
        }
        
        function updateItem($item_id, $qty) {
          
          if(array_key_exists($item_id, $_SESSION['cart_contents'])) {
            
            if($qty == 0) {
              
              unset($_SESSION["cart_contents"][$item_id]["qty"]);
              unset($_SESSION["cart_contents"][$item_id]["price"]);
              unset($_SESSION["cart_contents"][$item_id]);          
            }
            else {
              
              $_SESSION["cart_contents"][$item_id]['qty'] = $qty;
            }
          } 
          else return false;
          
          return true;
          
        }
        
        function emptyCart() {
          
          unset($_SESSION["cart_contents"]);
        }
        
        function getTotalPrice() {
          $total = 0;
          
          foreach($_SESSION["cart_contents"] as $id=>$details)
          {
              $total += $details['qty'] * $details['price'];
          }
          
          return $total;
        }
    
    }
