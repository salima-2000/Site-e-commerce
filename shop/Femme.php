<?php
session_start();
require_once "config.php";
$client_id=0;
if(!empty($_SESSION)){
	$client_id = $_SESSION["client_id"];
}

?>

<!DOCTYPE html>

<html>
<head> 
	<title> FEMME </title>
	<link rel="stylesheet" href="category.css">
	<?php include 'links.php'; ?>


</head>
<body>



<?php include 'header.php'; ?>

	<h1 id="category" >FEMME </h1>
	<h2 id="Servez-vous" ><em>Servez-vous</em></h2><br>
	<?php if($client_id === 1){ ?>
    <a style="margin-left:45%;margin-bottom:50%;" href="add_product.php" class = "text-center"><button type="button" class="btn btn-outline-secondary">add a product</button></a>
    <?php }?>

	



<?php
 $sql = "SELECT product_name,product_price,product_image FROM products WHERE category = 'female' GROUP BY product_name ; ";
  $result = mysqli_query($link, $sql);
?>
<?php include 'present_products.php'; ?>
<?php include 'footer.php'; ?>

<script>
	function remove_product(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(str+"id").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "remove_product.php?q="+str, true);
    xhttp.send();
  }


</script>	
</body>
</html>