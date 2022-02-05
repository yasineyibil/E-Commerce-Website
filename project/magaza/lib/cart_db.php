<?php


include "db.php";
session_start();

function addToCart($product_item){



  if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];
    }
    else{
        $products = array();
        
    }
  


    // ADET KONTROL

    if(array_key_exists($product_item->id, $products)){
        $products[$product_item->id]->count++;
    }
    else{
        $products[$product_item->id] = $product_item;
    }


    // Sepetin Hesaplanması
    $total_price=0;
    $total_count=0;
    
    foreach($products as $product){
        
        $product->total_price = $product->count * $product->price;
        $total_price= $total_price + $product->total_price;
        $total_count +=$product->count;
    }
    
    
    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;


    $_SESSION["shoppingCart"] ["products"] = $products;
    $_SESSION["shoppingCart"] ["summary"] = $summary;


    
}

function removeFromCart($product_id){

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];


        // Ürünü listeden Çıkar

        if(array_key_exists($product_id, $products)){
            unset($products[$product_id]);
            
        }

        //Tekrardan sepeti hesapla


        $total_price=0;
        $total_count=0;
        
        foreach($products as $product){
            
            $product->total_price = $product->count * $product->price;
            $total_price= $total_price + $product->total_price;
            $total_count +=$product->count;
        }

        
        
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;


        $_SESSION["shoppingCart"] ["products"] = $products;
        $_SESSION["shoppingCart"] ["summary"] = $summary;

        return true;
    }


}

function incCount($product_id){

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];


        // ADET KONTROL

        if(array_key_exists($product_id, $products)){
            $products[$product_id]->count++;
            
        }


        // Sepetin Hesaplanması
        $total_price=0;
        $total_count=0;
        
        foreach($products as $product){
            
            $product->total_price = $product->count * $product->price;
            $total_price= $total_price + $product->total_price;
            $total_count +=$product->count;
        }
        
        
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;


        $_SESSION["shoppingCart"] ["products"] = $products;
        $_SESSION["shoppingCart"] ["summary"] = $summary;

        return true;

    }

    

}

function decCount($product_id){

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];


        // ADET KONTROL

        if(array_key_exists($product_id, $products)){
            $products[$product_id]->count--;
            
        }
        else if($products->count < 1){            
                unset($products[$product_id]);

        }
        
      
        // Sepetin Hesaplanması
        $total_price=0;
        $total_count=0;
        
        foreach($products as $product){
            
            $product->total_price = $product->count * $product->price;
            $total_price= $total_price + $product->total_price;
            $total_count +=$product->count;
        }
   
        
        
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;


        $_SESSION["shoppingCart"] ["products"] = $products;
        $_SESSION["shoppingCart"] ["summary"] = $summary;

        return true;





    }


}








//AddToCart
/**
 * urun id al
 * card_dp.php dostasına post et
 * veritabanından urun bilgilerini al
 * sessiondaki sepete ekle 
 * sepeti terkar hesapla
 */



/* ------------------  MUTFAK  ------------------ */

 if(isset($_POST["p"])){

     $islem=$_POST["p"];

     if($islem=="addToCart"){

        $id=$_POST["product_id"];

        $product = $db->query("SELECT * FROM mutfakk WHERE id={$id}", PDO::FETCH_OBJ)->FETCH();
        $product->count=1;

        addToCart($product);
        

     }

     else if($islem=="removeFromCart"){
         
        $id=$_POST["product_id"];
        
        echo removeFromCart($id);
        
     }
 }




if(isset($_GET["p"])){
    
    $islem= $_GET["p"];
    
    if($islem == "incCount"){

        $id=$_GET["product_id"];

        if(incCount($id)){
            header("Location:../sepet.php");
        }

    }
    else if($islem == "decCount"){

        $id=$_GET["product_id"];

        if(decCount($id)){
           header("Location:../sepet.php");
        }

        
    }

}


/* ------------------  OBJE  ------------------ */



if(isset($_POST["pt"])){

    $islem=$_POST["pt"];

    if($islem=="addToCart"){

       $id=$_POST["product_id"];

       $product = $db->query("SELECT * FROM obje WHERE id={$id}", PDO::FETCH_OBJ)->FETCH();
       $product->count=1;

       addToCart($product);
       

    }

    else if($islem=="removeFromCart"){
        
       $id=$_POST["product_id"];
       
       echo removeFromCart($id);
       
    }
}




if(isset($_GET["pt"])){
   
   $islem= $_GET["pt"];
   
   if($islem == "incCount"){

       $id=$_GET["product_id"];

       if(incCount($id)){
           header("Location:../sepet.php");
       }

   }
   else if($islem == "decCount"){

       $id=$_GET["product_id"];

       if(decCount($id)){
          header("Location:../sepet.php");
       }

       
   }

}



/* ------------------  İPEK  ------------------ */


if(isset($_POST["ptk"])){

    $islem=$_POST["ptk"];

    if($islem=="addToCart"){

       $id=$_POST["product_id"];

       $product = $db->query("SELECT * FROM ipek WHERE id={$id}", PDO::FETCH_OBJ)->FETCH();
       $product->count=1;

       addToCart($product);
       

    }

    else if($islem=="removeFromCart"){
        
       $id=$_POST["product_id"];
       
       echo removeFromCart($id);
       
    }
}




if(isset($_GET["ptk"])){
   
   $islem= $_GET["ptk"];
   
   if($islem == "incCount"){

       $id=$_GET["product_id"];

       if(incCount($id)){
           header("Location:../sepet.php");
       }

   }
   else if($islem == "decCount"){

       $id=$_GET["product_id"];

       if(decCount($id)){
          header("Location:../sepet.php");
       }

       
   }

}

/* ------------------  KETEN  ------------------ */


if(isset($_POST["ptt"])){

    $islem=$_POST["ptt"];

    if($islem=="addToCart"){

       $id=$_POST["product_id"];

       $product = $db->query("SELECT * FROM keten WHERE id={$id}", PDO::FETCH_OBJ)->FETCH();
       $product->count=1;

       addToCart($product);
       

    }

    else if($islem=="removeFromCart"){
        
       $id=$_POST["product_id"];
       
       echo removeFromCart($id);
       
    }
}




if(isset($_GET["ptt"])){
   
   $islem= $_GET["ptt"];
   
   if($islem == "incCount"){

       $id=$_GET["product_id"];

       if(incCount($id)){
           header("Location:../sepet.php");
       }

   }
   else if($islem == "decCount"){

       $id=$_GET["product_id"];

       if(decCount($id)){
          header("Location:../sepet.php");
       }

       
   }

}



























/*
$urun_id = $_POST["productid"];

$cevap["hata"] = 1;
$cevap["id"] = $urun_id;

echo json_encode($cevap);
*/










?>