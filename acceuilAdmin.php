<!DOCTYPE html>
<html>
    <head>
        <title>accueil d'administrateur</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <style>
            button{
                color: dodgerblue;
                border-radius: 10px;
                padding: 14px 25px;
            }
            table{
                width: 100%;
            }
        </style>    
    </head>

    <body>
        <div>
            <table >
                <tr>
                    <td>
                        <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\img1.png" >
                    </td>
                    <td>
                        Chercher : <input type="search" placeholder="Search" style="border-radius: 10px; padding: 14px 25px;">
                    </td>
                    <td>
                        <a  href="deconnexion.php"><button>Deconnexion</button></a>
                    </td>
                    <td>
                    <a  href="acceuilClient.php"><button>voir en tant que client</button></a>
                    </td>

                </tr>
            </table>
        </div>
        <table cellpading="20";>
            <tr>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\gu.jfif">
                    <a  href="utilisateurs.php"><button>Gérer les utilisateurs</button></a></br></br>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\gu.jfif">
                    <a  href="deleteUtilisateur.php"><button>supprimer un utilisateur</button></a></br></br>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\cath.jfif">
                     <a href="ajouterCategorie.php"><button>Ajouter une categorie</button></a></br></br>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\aj p.jpg">
                    <a href="ajouterProduit.php"><button>Ajouter un produit</button></br></br></a>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\aj p.jpg">
                    <a href="formInscr.php"><button>Ajouter un utilisateur</button></br></br></a>
                </td>

            </tr>
            <tr>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\mod.jpg">
                    <a href="modifierProduit.php" ><button>Modifier un produit</button></a></br></br>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\delete.jfif">
                   <a href="supprimerProduit.php"> <button>Supprimer un produit</button></a></br></br>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\gu.jfif">
                    <a href="tableauBord.php" ><button>tableau de bord</button></a>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\cath.jfif">
                     <a href="produits.php"><button>Produits</button></a></br></br>
                </td>
                <td>
                    <img src="C:\Users\admin\Desktop\mes tp et projets\developement web\site ecommerce dev web\accueil\aj p.jpg">
                    <a href="supprimerCategorie.php"><button>Supprimer une categorie</button></br></br></a>
                </td>
            </tr>    
        </table>
    </body>
</html> 