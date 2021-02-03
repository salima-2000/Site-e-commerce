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
  <?php echo $nameErr ?><br>

  <label for="quantity">qantity</label><br>
  <input id="inputs" type="text" name="quantity"><br>
  <?php  echo $quantityErr ?><br>

  <label for="price">price</label><br>
  <input id="inputs" type="text" name="price"><br>
  <?php echo $priceErr ?><br>

  <p>category</p>
  <input id="radio" type="radio" name="gender" value="male">
  <label for="male">Male</label>
  <input id="radio" type="radio" name="gender" value="female">
  <label for="female">Female</label><br>
  <?php echo $genderErr ?><br>

  <p>size</p> 
  <input id="radio" type="radio"  name="size" value="S">
  <label for="S"> S </label>
  <input id="radio" type="radio"  name="size" value="M">
  <label for="M"> M </label>
  <input id="radio" type="radio" name="size" value="L">
  <label for="L"> L </label><br>
  <?php echo $sizeErr ?><br>

  <label for="color">color</label><br>
  <input id="color" type="color"  name="color"><br>
  <?php echo $colorErr ?><br>


  <label for="image">product image</label>
  <input style="float:right;" type="file"  name="image"><br>

   <?php echo $msg ?><br>


  <input type="submit" value="add product"  name="insert" id="submit"><br>


</form>

<?php include 'footer.php'; ?>


</body>
</html>