<?php include 'fetch_added_data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="add_product.css">


</head>
<body>
<?php include 'header.php'; ?>

<form id="connexion_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

  <label for="name">product name</label><br>
  <input id="inputs" type="text" name="name"><br>
  <div style="color:red;text-align:center"><?php echo $nameErr ?></div><br>

  <label for="quantity">qantity</label><br>
  <input id="inputs" type="text" name="quantity"><br>
  <div style="color:red;text-align:center"><?php  echo $quantityErr ?></div><br>

  <label for="price">price</label><br>
  <input id="inputs" type="text" name="price"><br>
  <div style="color:red;text-align:center"><?php echo $priceErr ?></div><br>

  <p>category</p>
  <?php
$sqln22 = "SELECT DISTINCT category FROM products ; ";
$resultn22 = mysqli_query($link, $sqln22);
?>
  <?php
    if (mysqli_num_rows($resultn22) > 0) {
    while ($rown22 = $resultn22->fetch_assoc()) {
    $cate=$rown22["category"];
  ?>
  <input id="radio" type="radio" name="gender" value="<?php echo $cate ?>">
  <label for="male"><?php echo $cate ?></label>
  <?php
    }}  
  ?>

<div style="color:red;text-align:center"><?php echo $genderErr ?></div><br>

  <p>size</p> 
  <input id="radio" type="radio"  name="size" value="S">
  <label for="S"> S </label>
  <input id="radio" type="radio"  name="size" value="M">
  <label for="M"> M </label>
  <input id="radio" type="radio" name="size" value="L">
  <label for="L"> L </label><br>
  <div style="color:red;text-align:center"><?php echo $sizeErr ?></div><br>

  <label for="color">color</label><br>
  <input id="color" type="color"  name="color"><br>
  <div style="color:red;text-align:center"><?php echo $colorErr ?></div><br>


  <label for="image">product image</label>
  <input style="float:right;" type="file"  name="image"><br>

  <div style="color:red;text-align:center"><?php echo $msg ?></div><br>


  <input type="submit" value="add product"  name="insert" id="submit"><br>


</form>

<?php include 'footer.php'; ?>


</body>
</html>