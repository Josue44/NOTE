<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-heading">Notes Enregistrées</div>
					<div class="panel-body">
						<table data-toggle="table"   data-search="true"  data-pagination="true"  >
						    <thead>
						    <tr>
						                

						        <th  data-sortable="true" ><h3><center>Date</center></h3></th>
						        <th   data-sortable="true"><h3><center>Idée Générale</center></h3></th>
						        <th data-sortable="true"><h3><center>Résumé</center></h3></th>
								<th data-sortable="true"><h3><center>Rappel</center></h3></th>
								<th data-sortable="true"><h3><center>Module</center></h3></th>
								<th  data-sortable="true"><h3><center>Nombres Heures du module</center></h3></th>

							</tr>
						    </thead>
							<tbody>
							<?php 
							$user=$_SESSION["id_user"];
							$q =  "select * from note where id_user='$user'";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['Date_Note'] ; ?>
							</td>
							<td> 
							<?php echo $c['Idee_Generale']; ?>
							</td>
							<td> 
							<?php echo $c['Resume'] ; ?>
							</td>
							<td> 
							<?php echo $c['Rappel'];   ?>
							</td>
                             <?php 
                             $num=$c['Num_Module'];
							$q1 =  "select * from module where Num_Module=$num";
							$r1 = $db -> query($q1) ;
							$c1 = $r1 -> fetch();
							
							?>

							<td> 
							<?php echo $c1['Nom_Module'] ; ?>
							</td>
							<td> 
							<?php echo $c1['Nb_Heures'];   ?>
							</td>
                            
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_note.php?id=".$c['Num_Note']."\" class=\"btn btn-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_note.php?id=".$c['Num_Note']."\" class=\"btn btn-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		
<span><a href="acceuil.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2" >Ajouter Note</a></span>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	</html>