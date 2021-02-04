<div class = "fluid-container background-h2">
<div style="margin-top:5px;">
<h2>commandes table</h2>
</div>
</div>

    <table class="table table-striped">   
            <tr> 
     
                <th><h3>user name</h3> </th>
                <th> <h3>product information</h3></th>
                <th> <h3>quantity</h3> </th>
                <th> <h3>benefits</h3> </th>
                <th> <h3>stat</h3> </th>

            </tr>
            <?php
            $chart_validate=0;
            $chart_refused=0;
            $chart_waiting=0;
            $chart_commander = 0;
            $chart_non_commander = 0;
            $January=0;
            $February=0;
            $march=0;
            $april=0;
            $may=0;
            $june=0;
            $july=0;
            $august=0;
            $september=0;
            $october=0;
            $november=0;
            $december=0;
            $male_sales=0;
            $female_sales=0;
            
          ?>
          <?php
            $sql = "SELECT commande_id,client_name,product_name,product_price,category,product_color,product_size,quantity,stat,date_commande
                    FROM products,commandes,clients WHERE products.product_id = commandes.fk_product_id AND clients.client_id = commandes.fk_client_id;";

            $result = mysqli_query($link, $sql);

          ?>
          <?php
            if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $commande_id = $row["commande_id"];
                $client_name = $row["client_name"];
                $product_name = $row["product_name"];
                $product_price = $row["product_price"];
                $category = $row["category"];
                $quantity = $row["quantity"];
                $product_color = $row["product_color"];
                $product_size = $row["product_size"];
                $etat = $row["stat"];
                $date = $row["date_commande"];
                $date_commande = explode("-",$date);
                $year = $date_commande[0];
                $month = $date_commande[1];
            


                if($etat==="non commander"){
                  $chart_non_commander+=1; 
                
                } else {
                  $chart_commander+=1; 
                }
                if($etat==="validate" || $etat==="validate and done"){
                  $chart_validate+=1; 
                  if($category==="male"){
                    $male_sales+=$quantity * $product_price; 
                  } else {
                    $female_sales+=$quantity * $product_price; 
                  }
                  if($year===date("Y")){
                    if($month==="01"){
                      $January+=$quantity * $product_price; 
                      }
                    if($month==="02"){
                      $February+=$quantity * $product_price; 
                      }
                    if($month==="03"){
                      $march+=$quantity * $product_price; 
                      }
                    if($month==="04"){
                      $april+=$quantity * $product_price; 
                      }
                    if($month==="05"){
                      $may+=$quantity * $product_price; 
                      }
                    if($month==="06"){
                      $june+=$quantity * $product_price; 
                      }
                    if($month==="07"){
                      $july+=$quantity * $product_price; 
                      }
                    if($month==="08"){
                      $august+=$quantity * $product_price; 
                      }
                    if($month==="09"){
                      $september+=$quantity * $product_price; 
                      }
                    if($month==="10"){
                      $october+=$quantity * $product_price; 
                      }
                    if($month==="11"){
                      $november+=$quantity * $product_price; 
                      }
                    if($month==="12"){
                      $december+=$quantity * $product_price; 
                      }
                  }
                 
                } elseif ($etat==="refused" || $etat==="refused and done") {
                  $chart_refused+=1;
                } elseif ($etat==="waiting for validation") {
                  $chart_waiting+=1; 
                }

            ?>
            <tr>
                <td><?php echo $client_name?></td>
                <td>
               
                    <div class='cart-info'>
                        <div>
                            <p><?php echo"$product_name"?></p>
                            <small>category: <?php echo"$category"?></small><br>
                            <small>color: <span style="margin-left:10px;padding-right:40px;;background-color:<?php echo"$product_color"?>;color:<?php echo"$product_color"?>;">.</span></small><br>
                            <small>size: <?php echo"$product_size"?></small><br>
                          
                        </div>
                    </div>
                </td>
                <td><?php echo $quantity ?></td>
                <td><?php $benefice = $product_price * $quantity; echo $benefice ?>$</td>
               
                <td>
                    <?php 
                        if($etat==="waiting for validation"){ ?>
                            <div id="<?php echo $commande_id?>"> 
                            <button  type="button" value="<?php echo $commande_id ?>" onclick="valider(this.value)">valider</button>
                            <button  type="button" value="<?php echo $commande_id ?>" onclick="refuse(this.value)">refuse</button>
                            </div>
                        <?php } else {
                            echo $etat;

                        }


                    ?>
                       
                   
                  
             
                </td>
                

                </tr>


            <?php }}
            
            ?>
          </table>