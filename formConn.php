<!doctype html>
<html>
<head>
	<title>connexion</title>
	<link rel="stylesheet" href="connexion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	
</head>
<body >
<?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                } if(isset($_GET['err'])){
                    $err=$_GET['err'];
                    switch($err){
                    case 'erreur':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong>  veuillez verifier votre mail!!!
                            </div>
                            <?php
                        break;

                        case 'succes':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succes</strong> email envoyé!!
                            </div>
                        <?php
                        break;
                    }}
                
                ?> 

	<form action="connexion.php" method="POST" id="formulaire">
		<input type="email" id="Nom" name="email" placeholder="email" required autocomplete="false"><br>
	
		<input type="password" id="password" name="password" placeholder="Mot De Passe "  required><br>
		>
		<button id="btn" name="valider">Valider</button>
		<a href="motPasseOublie.php">Mot de passe oublie</a>
	</form>
	
	
	
	

</body>
</html>