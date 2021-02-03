<?php
            session_start();
            require_once 'config.php';
           
            $msg=$bdd->prepare("select * from messagerie where etat='non_lu'");
            $msg->execute();
           
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>G6-commerce</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <style>
            td,th{
              border:2px solid black;
              }
            table{
                border-collapse: collapse;
                 caption-side:top;
           
             }
             caption{
                font-size: x-large;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-style: italic;
             }
             th{
                background-color:grey;
             }

        </style>
    </head>

    <body>
        
        

        <table align="center">
               <caption >Voir les messages non lus :</caption>
               <thead>
                    <tr>
                        <th> expediteur_name</th>
                        <th>email</th>
                         <th>subject</th>
                         <th>message</th>
                         <th>date</th>
                     </tr>
               </thead>
                    <?php foreach($msg as $elem)
                    {
                    ?>
                          <tr>
                               <td> <?php echo' '. $elem ['expediteur'];?></td>
                               <td><?php echo' '. $elem ['email'];?></td>
                               <td><?php echo' '. $elem ['subject'];?></td>
                               <td><?php echo' '. $elem ['message'];?></td>
                               <td><?php echo' '. $elem ['date'];?></td>
                             
                            </tr>
                            
                    <?php
                    $req=$bdd->prepare("update messagerie set etat=? where id=?");
                    $req->execute(array('lu',$elem ['id']));
                    } 
                    ?>    
        </table>
   </body>
</html>
