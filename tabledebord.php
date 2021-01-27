<!DOCTYPE html>
<html>
    <head>
        <title> tableau de bord</title>
        <meta>historique</meta>
    </head>
    <body>
        <?php
            $serevrname="localhost";
            $user="root";
            $password="";
            $database="commerce"
            try{
                $connexion=new PDO("mysql:host=$serevrname;dbname=$database",$user,$password);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION).
                $sql="select * from commande;";
                connexion->execute($sql);
            }catch(PDOEXCEPTION $e){
                echo $sql."<br>".$e->getMessage();
            }
        ?>    
    </body>
</html>