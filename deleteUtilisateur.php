<!DOCTYPE html>
<html>
    <head>
        <title>supprimer utilisateur</title>
        <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php
        if(isset($_GET['succes'])){?>
            
         <div class="alert alert-danger">
            <strong>utilisateur supprime</strong>
        </div>

        <?php
        }
         ?>
        <div  align="center">
        <form action="supprimerUtilisateur.php" method="POST">
              <input type="email" name="email" placeholder="email"> <br> <br> 
             <input type="submit" name="supprimer" class="btn btn-danger"  value="supprimer">
        </form>
        </div>
    </body>
</html>
