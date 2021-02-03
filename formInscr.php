<!doctype html>
<html>
<head>
    <meta charset="UTF8">
    <title>G6-commerce</title>
    
    
	<link rel="stylesheet" href="inscription.css">
    <link rel="icon" type="image/jpg" sizes="16x16" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
</head>
<body class = "inscription">
<div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                          <a href="formConn.php">connexion</a>
                        <?php
                          // header('Location:formConn.php') ;die();
                            break;
                             
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        
                        break;
                             
                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                           
                        break;
                             
                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> name trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 
                                
                    }
                }
                ?>

	<form id="formulaire" action="inscription.php" method="POST">
       <h2>INSCRIPTION</h2> 
		<input type="text" id="Nom" name="name" placeholder="user_name *" required="required" autocomplete="off"><br>
		
		<input type="tel"id="num"  name="phone" placeholder="Téléphone" autocomplete="off"><br>
		<input type="email" id="email" name="mail" placeholder="E-mail *" required="required" autocomplete="off"><br>
		<input type="password" id="password" name="password" placeholder="Mot De Passe *"  required="required"  autocomplete="off"><br>
		<div class="msg1"></div>
        <input type="password" id="conpassword" name="verification"  placeholder="Confirmation De Mot De Passe *"required="required" autocomplete="off"><br>
        <br>
        
	
        <button id="btn" name="valider">Valider</button>
        <p class="msg1" > les champs * sont obligatoires</p>
    
       
	</form>
</body>
</html>