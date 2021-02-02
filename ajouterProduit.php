
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF8">
        <title>G6-commerce</title>
        <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
    <style>
        body{
            background-color: lightskyblue;
        }
        .forme{
            margin-top: 20px;
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
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'succes':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> Ajout réussi !
                            </div>
                            
                        <?php
                            
                            break;
                        case 'category':
                                ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur</strong> categorie non existante!!
                                    </div>
                                <?php
                                
                                break;
                             
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> produit deja existant!!
                            </div>
                        <?php
                        
                        break;
                             
                     } 
                }
                ?>
        <h1 >AJOUTER UN PRODUIT</h1></br></br>
        <form  action="traitementProduit.php" method="POST" class="forme">
            Nom du produit:<input name="nom" type="text" required /></br></br>
            
            Categorie:<input name="cat" type="text"  required/></br></br>
            Quantitée:<input name="quantite" type="text"  required/></br></br>
            Prix:<input type="text" name="prix" required/></br></br>
            Decription:<input type="text-area" name="description" required/></br></br>
           
            lien d'image :<input type="text" name="img" required/></br></br>
            <input type="submit" value="Ajouter"style="font-size: 22px;"/>
            <input type="reset" value="Annuler" style="font-size: 22px;"/></br></br>
        </form>


    </body>
</html>