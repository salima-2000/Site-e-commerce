<!DOCTYPE html>
<html>
    <head>
        <title>
            ajouter cathegorie

        </title>
        <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   
    <style>
        body{
            background-color: lightskyblue;
        }
        form{
            text-align: center;
            color: mediumblue;
            font-size: 30px;
            font-family:'Courier New', Courier, monospace;

        }    
        h1{

            text-align: center;
            color:dodgerblue;
            font-size: 50px;
            font-family: 'Courier New', Courier, monospace;

        }
    </style>
     </head>
    <body>
      <?php
           if(isset($_GET['err']))
           {
               $err = htmlspecialchars($_GET['err']);

               switch($err)
               {
                   case 'success':
                   ?>
                       <div class="alert alert-success">
                           <strong>Succès</strong> ajout réussi!
                       </div>
                      
                   <?php
                     
                       break;
                        
                   case 'already':
                   ?>
                       <div class="alert alert-danger">
                           <strong>Erreur</strong> deja existant!!
                       </div>
                <?php 
                }
            }?>
                   
        <h1>Ajouter une categorie</h1>
        <form method="POST" action="traitementCategorie.php">
            nom de la categorie:<input name="nom" type="text"/></br></br>
           
            image:<input name="image" type="text"/></br></br>
           <hr>
            <input name="enregistrer" type="submit" value="enregistrer" style="font-size: 22px;"/>
            <input name="annuler" type="reset" value="Annuler" style="font-size: 22px;"/>
        </form>
    </body>
</html> 