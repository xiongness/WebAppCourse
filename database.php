<!DOCTYPE html>
<html>
  <head>
    <title>HELLO TESTER!</title>
  </head>
<body>
  <div class="container">

  <?php
  //Allow Headers
  header('Access-Control-Allow-Origin: *');

  $servername="localhost:3306";
  //$servername = 'bxion4557server.centralus.cloudapp.azure.com:3306';
  //$servername = '104.43.128.43:3306';

  $username="xiongness";
  $password="mykiddos21";
  $dbname="lineagedesigns";

   // Create connection

  $conn=new mysqli('localhost:3306', 'xiongness', 'mykiddos21', 'lineagedesigns');

   // Check connection

  if (
   $conn->connect_error
   )

  echo
   "Error: Unexpected connection error. Please retry the operation.";

   else {
  //BEAR SHADOW
   $products=$conn->query("SELECT * FROM 'earrings' WHERE 'SKU = JR01'");

   if(($products!=0) && (Earrings->num_rows>0))
  {
    $row=$products->fetch_assoc();

    $A=$row['SKU'];
    $B=$row['Product_Type'];
    $C=$row['Item_Description'];
    $D=$row['Price'];

   echo

   "<div class='columns'>
      <ul class='products'>
        <li>
          <img class='thumbnail' src ='".$path."/>
        </li>
        <li>".$A."</li>
        <li>$".$B.".00</li>
        </ul>
    </div>";
  }

  //BEAR CLAW SHADOW
   $product2=$conn->query("SELECT * FROM products WHERE product_ID = 2");

   if(($product2!=0) && ($product2->num_rows>0))
  {

   $row=$product2->fetch_assoc();

   $A=$row['SKU'];
   $B=$row['Product_Type'];
   $C=$row['Item_Description'];
   $D=$row['Price'];

  echo

  <div class='columns'>
     <ul class='products'>
       <li>
         <img class="thumbnail" src ="bearshadow.jpg"/>
       </li>
       <li>".$C."</li>
       <li>$".$D.".00</li>
       </ul>
   </div>;
  }

   $conn->close();
  }

  ?>
  </div>

</body>
</html
