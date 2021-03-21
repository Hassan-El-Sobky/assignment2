<?php
 require_once("functions.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    // echo "$name <br>";
    // echo "$desc <br>";
    // echo "$price <br>";
   
   $errors=[];

   if(empty($name))
   {
       $errors[]="name is required";
   }elseif (!is_string($name) || is_numeric($name))
   {
       $errors[]="name must be string";
   }elseif (strlen($name)<5 || strlen($name)>255)
   {
       $errors[]="length [5-255]";
   }

 if(!is_string($desc) || is_numeric($desc))
 {
     $errors[]="description must be string";
 }

 if(empty($price))
 {
      $errors[]="price is required";
 } elseif (!is_numeric($price))
 {
      $errors[]="Must be number";
 } elseif ($price<0)
 {
       $errors[]=" Price  must be greater than 0";
 }


   if(empty($errors))
   {
       echo" Name: $name <br>";
       echo" Descrioption: $desc <br>";
         echo"Price :";
          getPriceWithDiscount($price);
 
   }else
   {
       print_r($errors);
   }
}


?>