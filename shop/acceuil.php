<?php
require_once "config.php";
session_start();
$client_id=0;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>G6-commerce</title>
        <link rel="stylesheet" href="acceuil.css" />
        <?php include 'links.php'; ?>
    </head>
    <body>
     
    <?php include 'header.php'; ?>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="femme.php"><img  style="height:100%;"  src="1.jpg" class="d-block w-100" alt="robe"></a>
              </div>
              <div class="carousel-item">
                <a href="homme.php"><img  style="height:100%;"  src="3.jpg" class="d-block w-100" alt="t-chirt"></a>
              </div>
              <div class="carousel-item">
                <a href="femme.php" ><img  style="height:100%;"  src="2.jpg" class="d-block w-100" alt="pontalon"></a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
          <div>
              <hr>
              <div style="background-color: grey;" class="fluid-container">
              <h2 style="margin-left:10vw" >Nos meilleures recommendations♥♥♥</h2>
              </div>
              <table>
                  <tr>
                      <td><figure><img style="height:20vw;width: 16vw;margin-right:10vw" src="produit1.jpg" alt="produit1">
                                   <figcaption style="margin-right:10vw" class="nomProduit">shoes </figcaption>
                                   <figcaption style="margin-right:10vw" class="prix">12$ </figcaption>
    
                          </figure>
                      </td>
                  
                      <td><figure><img style="height:20vw;width: 16vw;margin-left:10vw" src="produit2.jpg" alt="produit1">
                        <figcaption style="margin-left:10vw" class="nomProduit">t-shirt </figcaption>
                        <figcaption style="margin-left:10vw" class="prix">30$ </figcaption>
    
                          </figure>
                    </td>
                  </tr>
    
                  <tr>
                    
                     <td><figure><img style="height:20vw;width: 16vw;margin-right:10vw" src="produit3.jpg" alt="produit1">
                                   <figcaption style="margin-right:10vw" class="nomProduit">coat Femme </figcaption>
                                   <figcaption style="margin-right:10vw" class="prix">90$ </figcaption>
    
                          </figure>
                      </td>
                  
                      <td><figure><img style="height:20vw;width: 16vw;margin-left:10vw" src="produit4.jpg" alt="produit1">
                        <figcaption style="margin-left:10vw" class="nomProduit">coat Homme </figcaption>
                        <figcaption style="margin-left:10vw" class="prix">80$ </figcaption>
    
                          </figure>
                    </td>
    
                  </tr>
                
    
              </table>
              <div style="background-color: grey;" class="fluid-container">
              <h2 style="margin-left:10vw" class="fluid-container"> FASHION♥♥♥ </h2>
              </div>
              <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">femme</strong>
                      <h3 class="mb-0">coats</h3>
                   
                      <p class="card-text mb-auto">la tendance des coats pour les femmes actuellement sont ceux fabriques en ...</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success">Homme</strong>
                      <h3 class="mb-0">shoes</h3>
                      
                      <p class="mb-auto">la tendance des shoes pour les hommes sont ceux d'adidas...</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    
            
                    
                  </div>
                </div>
              </div>





     
              <footer class="container-fluid">
                <div class="jumbotron jumbotron-sm">
                  <div class="container">
                      <div class="row">
                          <div class="col-sm-12 col-lg-12">
                              <h1 class="h1">
                                  Contact us <small>soyez les bienvenus</small></h1>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8">
                          <div class="well well-sm">
                            <form action="page.php" method="POST">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="name">
                                              Name</label>
                                          <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                      </div>
                                      <div class="form-group">
                                          <label for="email">
                                              Email Address</label>
                                          <div class="input-group">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                              </span>
                                              <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                      </div>
                                      <div class="form-group">
                                          <label for="subject">
                                              Subject</label>
                                          <select id="subject" name="subject" class="form-control" required="required">
                                              <option value="na" selected="">Choose One:</option>
                                              <option value="service">Services</option>
                                              <option value="suggestions">Suggestions</option>
                                              <option value="product">help</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                         
                                          <label for="name">
                                              Message</label>
                                          <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Message"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                          Send Message</button>
                                  </div>
                              </div>
                              </form>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <form>
                          <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                          <address>
                              <strong>INPT</strong><br>
                            ASEDS G6<br>
                             
                             
                          </address>
                          <address>
                              <strong>Adresse mail</strong><br>
                              <a href="mailto:#">G6ASEDS@gmail.com</a>
                          </address>
                          </form>
                      </div>
                  </div>
              </div>
              
              </footer>

        
            <div class="container">
              <div class="pull-right hidden-xs">
                <b>All rights reserved</b>
              </div>
              <strong>Copyright &copy; 2021 Brought to You By <a href="">G6-commerce</a></strong>
            </div>
            <?php include 'footer.php'; ?>

    <script src="acceuil.js"></script>    

    </body>
</html>